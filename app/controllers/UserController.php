<?php

class UserController extends HomeController {
    
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
        $this->beforeFilter('csrf', array('on'=>'post'));
    }
    
    /**
     * 
     */
    public function register()
    {
        $this->data['title'] = 'Sign Up';
        $this->data['track'] = 'register';
        return View::make('frontend.pages.users.register')->with($this->data);
    }
    
    /**
     * 
     */
    public function doRegister()
    {
        $params = Input::all();
        $rules = array(
            'first_name'            =>  'required|alpha|min:2',
            'last_name'             =>  'required|alpha|min:2',
            'display_name'          =>  'required|min:2',
            'email'                 =>  'required|email|unique:dtb_users',
            'password'              =>  'required|alpha_num|between:6,12|confirmed',
            'password_confirmation' =>  'required|alpha_num|between:6,12'
        );
        $validator = Validator::make($params, $rules);
        if ($validator->fails())
        {
            return Redirect::to('/register')->withInput()->withErrors($validator);
        }
        else
        {
            $ret = MemberModel::saveUser($params);
            if ($ret) {
                return Redirect::to('/login')->withInput()->with('message', '<p class="alert alert-success">Thanks for registering!</p>');
            } else {
                return Redirect::to('/register')->withInput()->with('message', '<p class="alert alert-danger">Ohmmmm ! Errors</p>');
            }
        }
    }
    
    /**
     * 
     */
    public function login()
    {
        $this->data['title'] = 'Login';
        $this->data['track'] = 'login';
        return View::make('frontend.pages.users.login')->with($this->data);
    }
    
    /**
     * 
     */
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
                return Redirect::to('/login')->withInput()->with('message', '<p class="alert alert-danger">Your username/password combination was incorrect</p>');
            }
        }
    }
    
    /**
     * 
     */
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/login')->with('message', 'Your are now logged out!');
    }
}
