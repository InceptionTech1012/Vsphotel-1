<html> 
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<title>WELCOME PAGE</title>
<style>
	body{
		min-height:calc(500vh-80px);
		background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('wel3.png');
		background-position:center;
		background-size:cover;
		background-attachment:fixed;
		background-repeat:no-repeat;
		font-family: Arial;
	}

	.name{
	position :absolute;
	Top:60px;
	right:300px;
	font-family: Lucida Handwriting; 
	font-size:80px;
	color:#fff;
	}

	ul { 
		margin: 0px; 
		padding: 350px; 
		list-style: none; 
	}

	ul li{ 
		
		float:left; 
		width: 250px; 
		height: 40px; 
		background:pink;
		opacity:0.7;
		border-radius:40px;
		font-size:30px;
		color:black;
		line-height: 40px; 
		text-align: center; 
		font-size: 30px;
			margin-right: 2px; 
			opacity:2px;
	}
	 
	ul li a { 
		text-decoration: none; 
		color:black; 
		display: block; 
	} 

	ul li a:hover { 
	border-radius:40px;
	background-color:green; 
	} 

</style>
</head>

<body>
<div class="name">
<p>
<font color="white">
Welcome to our<br>
VSP KITCHEN
</font>
</p>
</div>
<ul><br>
       <li><a href="login.php">LOG IN</a></li>
       <li><a href="signup.php">SIGN UP</a></li>  
</ul>  
</body>
</html> 