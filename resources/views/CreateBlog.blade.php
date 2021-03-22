@extends('layout')
@section('content')

		<div class="container">
			@if(!Session::has('user'))
		 <p class="lead">you are not logged in. Please login to Create a Blog.</p>
		 <a href="/login"class="btn btn-success btn-lg" role="button">Login</a>
		 </div>
		 
	 @else
<div class="blog d-flex justify-content-center">
	
	<div class="loginform">
		<h4>Create New Blog</h4>
		<form method="post" action="blog">
			@csrf
			<div class="name">
			<input type="text" name="title" placeholder="Enter Your Blog title">
		</div>
		<div class="name">
			<input type="text" name="userid" placeholder="Enter Your id">
		</div>
		<div class="name">
			<textarea class="form-control" name="desc" aria-label="With textarea" placeholder="Enter Your Blog decription"></textarea>
		</div>
		
		<div class="submit">
			<input type="submit" value="Create">
		</div>		
	</form>
	</div>	
</div>
@endif
@endsection