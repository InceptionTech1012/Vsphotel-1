<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" href="pass.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="Captcha();">
<form action="login.php" method="POST">
<div class="form-box">
<h1>Login Here</h1>

<div class="input-box">
<i class="fa fa-user-o"></i>
<input type="text" placeholder="Username" name="user">
</div>

<div class="input-box">
<i class="fa fa-key"></i>
<input type="password" placeholder="Password" name="pass" id="passinput">
<span class="eye" onclick="passfunc()">
<i id="hide1" class="fa fa-eye"></i>
<i id="hide2" class="fa fa-eye-slash"></i>
</span>
</div>

<div class="input-box">
<input type="text" id="mainCaptcha" placeholder="Captcha">
<button type="button" class="refresh-btn" onclick="CaptchaGenerator();">Refresh </button>
</div> 

<div class="input-box">
<input type="text" id="txtInput" placeholder="Enter Captcha">
<button type="button" class="refresh-btn" onclick="alert(IsValid());">Check</button>
</div> 


<input type="submit" value="Submit" class="login-btn">

<p class="link">
<a href="forget.html">Forget Password</a>
<p>

</div>
</form>

<script>
function passfunc()
{
var x = document.getElementById("passinput");
var y = document.getElementById("hide1");
var z = document.getElementById("hide2");
if(x.type == 'password')
{
x.type = "text";
y.style.display = "block";
z.style.display = "none";
}
else
{
x.type = "password";
y.style.display = "none";
z.style.display = "block";
}
}

function IsValid()
{
var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
var string2 = removeSpaces(document.getElementById('txtInput').value);
if (string1 == string2)
{
return true;
}
else
{        
return false;
}
}
function CaptchaGenerator()
{
var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
var i;
for (i=0;i<6;i++)
{
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
}
var res = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
document.getElementById("mainCaptcha").value = res
}
function removeSpaces(string)
{
return string.split(' ').join('');
}

</script>
</body>
</html>