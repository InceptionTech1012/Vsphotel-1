<!doctype html>
<include("newlogin.php")>
<html>
<head>
<title>Login </title>
	<style>
		body{
			margin:0;
			padding:0;
			background:url('loginimg.jpg');
			background-size:cover;
			font-family:sans-serif;
			opacity:5; 
		}

		.loginbox{
			width:320px;
			height:420px;
			border-radius:20px;
			background:#000;
			color:#fff;
			top:50%;
			left:50%;
			position:absolute;
			transform:translate(-50%,-50%);
			box-sizing:border-box;
			padding:70px 30px;
		}

		.loginicon{
			width:100px;
			height:100px;
			border-radius:50%;
			position:absolute;
			top:-50px;
			left:calc(50% - 50px);
		}

		h1{
			margin:0;
			padding:0 0 20px;
			text-align:center;
			font-size:22px;
			
		}

		.loginbox p{
			margin:0;
			padding:0;
			font-weight:bold;
		}

		.loginbox input{
			width:100%;
			margin-bottom:20px;
		}

		.loginbox input[type="text"], input[type="password"]
		{
			border:none;
			border-bottom:1px solid #fff;
			background:transparent;
			outline:nine;
			height:40px;
			color:#fff;
			font-size:16px;

		}

		.loginbox input[type="submit"]
		{
			border:none;
			outline:none;
			background:lightblue;
			color:black;
			font-size:20px;
			border-radius:20px;
			
		}

		.loginbox input[type="submit"]:hover
		{
			cursor:pointer;
			background:#ffc107;
			color:#000;
		}

		.loginbox a{
			text-decoration:none;
			font-size:12px;
			line-height:20px;
			color:darkgrey;
		}
		.loginbox a:hover{
			color: #ffc107;
		}
	</style>
</head>
<body>
	<div class="loginbox">
	<img src="loginicon.jpg" class="loginicon">
	<h1>LOGIN HERE</h1>
	<form action="explore.php" method="POST">
	<p>USER NAME</p>
	<input type="text" name="username" placeholder="enter username">
	<p>PASSWORD</p>
	<input type="password" name="password" placeholder="enter password"><br>
	<input type="submit"  name="submit" value="LOGIN"><br>
	<a href="signup.php">Don't have account.</a><br>
	<a href="forget.php">Forget Password.</a>

	</form>
</body>
</html>