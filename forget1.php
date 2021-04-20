<?php

$con = mysqli_connect('localhost', 'root');
if($con)
{
echo "Connecton established";
}
else
{
echo "No Connection";
}

mysqli_select_db($con, 'event');

$name = $_POST['user'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];

if($pass == $repass)
{
$q = " UPDATE signup SET password='$pass' WHERE username='$name' ";
$result = mysqli_query($con,$q); 
}
else
{
echo "WRONG PASSWORD";
}

?>