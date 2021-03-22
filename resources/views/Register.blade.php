@extends('layout')
@section('content')
<div class="login">
	<div>
		<h1>Blogging</h1>
		<h4>Register to Your Account</h4>
	</div>
	<div class="loginform">
		<form method="post" action="register">
			@csrf
			<div class="name">
			<input type="text" name="name" placeholder="Enter Your Fullname">
		</div>
		<div class="name">
			<input type="text" name="email"  placeholder="Enter Your Email">			
		</div>
		<div class="password">
			<input type="password" name="password" placeholder="Enter Your password">
		</div>
		<div class="submit">
			<input type="submit" value="Register">
		</div>		
	</form>
		<div class="forgot">
		<a href="login" class="m-3">Already register? </a>
		<!-- <p class="m-3">Don't have an account? <a href="#"> Sign Up </a></p> -->
		</div>
	</div>
		
		
</div>
@endsection