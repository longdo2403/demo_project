@extends('frontend.layouts.master')
@section('wrapper')
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="dologin" method="post">
            <h2>Please Sign In <small>It's free and always will be.</small></h2>
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
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<div class="form-group <?= $errors->has('email') ? 'has-error' : '' ?>">
				<input type="email" name="email" id="email" class="form-control input-lg " placeholder="Email Address" tabindex="4" value="{{Input::old('email')}}">
			</div>
			<div class="form-group <?= $errors->has('password') ? 'has-error' : '' ?>">
				<input type="password" name="password" id="password" class="form-control input-lg " placeholder="Password" tabindex="5" value="{{Input::old('password')}}">
			</div>
			
			<div class="row">
				<div class="col-xs-12"><input type="submit" value="Sign In" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
			</div>
		</form>
	</div>
</div>
@overwrite