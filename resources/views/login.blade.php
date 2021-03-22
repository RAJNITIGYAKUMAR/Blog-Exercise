@extends('layout')
@section('content')
<div class="login">
	<div>
		<h1>Blogging</h1>
		<h4>Log-in to Your Account</h4>
	</div>
	<div class="loginform">
		<form action="login" method="post">
			@csrf
		<div class="name">
			<input type="text" name="email" required="" placeholder="Enter Your Email">
		</div>
		<div class="password">
			<input type="password" name="password" required="" placeholder="Enter Your password">
		</div>
		<div class="submit">
			<input type="submit" value="SIGN IN">
		</div>		
	</form>
		<div class="forgot">
		<a href="#" class="m-3">Forgot Password? </a>
		<p class="m-3">Don't have an account? <a href="register"> Sign Up </a></p>
		</div>
	</div>
		
		
</div>
@endsection