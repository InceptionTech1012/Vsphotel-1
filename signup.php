<!doctype html>
<include("signup1.php")>
<html>
<head>
	<title>SIGN UP</title>
	<style>
		body{
			background:url('signupimg.jpg');
			background-size:cover;
			font-family:Time New Roman;
			
		}

		.wrap{
			width:350px;
			height:600px;
			border-radius:20px;
			background:#000;
			color:#fff;
			top:50%;
			left:50%;
			position:absolute;
			transform:translate(-50%,-50%);
			box-sizing:border-box;
			padding:50px 30px;
			
		}

		h2{
			text-align:center;
		}

		input[type=text],input[type=password], input[type=email]
		{
			width:100%;
			box-sizing:border-box;
			padding:15px 5px;
			background:rgba(0,0,0,0.10);
			outline:none;
			border:none;
			border-bottom:2px dotted #fff;
			color:#fff;
			border-radius:5px;
			margin:5px;
			font-weight:bold;
		}


		input[type=submit]
		{
			width:100%;
			box-sizing:border-box;
			padding:10px 0;
			margin-top:30px;
			outline:none;
			border:none;
			background:#60adde;
			opacity:0.7;
			border-radius:20px;
			font-size:20px;
			color:#fff;
		}

		input[type=submit]:hover
		{
			background:#003366;
			opacity:0.7;
		}
	</style>
</head>
<body>
	<div class="wrap">
	<h2>SIGN UP HERE</h2>
	<form action="login.php"  method="post">
		<input type="text" placeholder="first name" name="fname" required>
		<input type="text" placeholder="last name" name="lname" required>
		<input type="email" placeholder="email" name="email" required>
		<input type="text" placeholder="username" name="username" required>
		<input type="password" placeholder="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
		title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
		placeholder="at least one number,one uppercase,one lowercase letter,8 or more characters" required>
		<input type="submit" value="submit" name="Register">
	</form>
	
</body>

</html> 