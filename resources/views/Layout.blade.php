<!DOCTYPE html>
<html>
<head>
	<title>Blogging</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.w-5{
			display: none;
		}
		h1,h4{
			margin:15px;
		}
		.login{
			width:100%;
			height: 100vh;
			display: flex;
			flex-direction:column;
			justify-content: center;
			align-items: center;
			background:#defaff;
		}
		.loginform{
			border-radius: 5px;
			text-align: center;
			width:400px;
			background:#d2d6d3;
		}
		.name,.password,.submit{
			padding:5px;
			margin:10px;
		}
		.submit input{
			background-color:#ff351f;
			border-radius:5px;
		}
		input{
			width: 100%;
			padding:10px;
			text-transform:uppercase;
		}
	</style>
</head>
<body>
    {{ View::make('header')}}
    @yield('content')
    {{ View::make('footer')}}
    
</body>
<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			alert("all set");
		})
	})
</script> -->
</html>