@extends('frontend.layouts.master')
@section('wrapper')
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" action="doregister" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <h2>Please Sign Up <small>It's free and always will be.</small></h2>
            <hr class="colorgraph">
            <?php $errs = $errors->all(); ?>
            @if (!empty($errs))
            <p class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
            </p>
            @endif
            @if(Session::has('message'))
                {{ Session::get('message') }}
            @endif
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group <?= $errors->has('first_name') ? 'has-error' : '' ?>">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="{{Input::old('first_name')}}">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group <?= $errors->has('last_name') ? 'has-error' : '' ?>">
                        <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value="{{Input::old('last_name')}}">
                    </div>
                </div>
            </div>
            <div class="form-group <?= $errors->has('display_name') ? 'has-error' : '' ?>">
                <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3" value="{{Input::old('display_name')}}">
            </div>
            <div class="form-group <?= $errors->has('email') ? 'has-error' : '' ?>">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" value="{{Input::old('email')}}">
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group <?= $errors->has('password') ? 'has-error' : '' ?>">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group <?= $errors->has('password_confirmation') ? 'has-error' : '' ?>">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            </div>
        </form>
    </div>
</div>
@overwrite