<?php

class UserController extends BaseController {
    
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }
    
	public function register()
	{
	    $data['title'] = 'Sign Up';
	    $data['track'] = 'register';
		return View::make('frontend.pages.users.register')->with($data);
	}
	
	public function login()
	{
	    $data['title'] = 'Login';
	    $data['track'] = 'login';
	    return View::make('frontend.pages.users.login')->with($data);
	}
	public function dologin()
	{
	    $params = Input::all();
	    $rules = array(
	        'email'    =>  'required',
	        'password' =>  'required'
	    );
	    $validator = Validator::make($params, $rules);
	    if ($validator->fails())
	    {
	        return Redirect::to('/login')->withInput()->withErrors($validator);
	    }
	    else
	    {
	        if (Auth::attempt(array('email' => $params['email'], 'password' => $params['password'])))
	        {
	            return Redirect::route('homepage');
	        }
	        else 
	        {
	            return Redirect::to('/login')->withInput()->with('message', 'Your username/password combination was incorrect');
	        }
	    }
	}
	public function logout()
	{
	    Auth::logout();
	    return Redirect::to('/login')->with('message', 'Your are now logged out!');
	}
}
