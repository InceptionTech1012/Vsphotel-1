<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'project');

$username = $_POST['username'];
$password = $_POST['password'];

$q = " select * from signup where username = '$username' && password = '$password' " ;

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1){
	echo "  valid login done";
}
else{
	echo "   invalid login";
}

?>