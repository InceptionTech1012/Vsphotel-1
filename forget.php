
<include("forget1.php")>
<html>
<head>
<title>PASSWORD</title>
<link rel="stylesheet" href="pass.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form action="login.php" method="POST">
<div class="form-box">
<h1>Password</h1>

<div class="input-box">
<i class="fa fa-user-o"></i>
<input type="text" placeholder="Username" name="user">
</div>

<div class="input-box">
<i class="fa fa-key"></i>
<input type="text" placeholder="Enter Password" name="pass" id="passinput">
</div>

<div class="input-box">
<i class="fa fa-key"></i>
<input type="text" placeholder="Re-enter Password" name="repass" id="passinput">
</div>

<input type="submit" value="Change" class="login-btn">

</div>
</form>
</body>
</html>