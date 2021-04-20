<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($fname) || !empty($lname) || !empty($email) || !empty($password)) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "project";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From signup Where email = ? Limit 1";
     $INSERT = "INSERT Into signup (fname, lname, email, username, password) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
	  //4s for user,pass,gender,mail 2i for code n phone
      $stmt->bind_param("sssss", $fname, $lname, $email, $username, $password);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}


mysqli_select_db($con, 'event');

$name = $_POST['user'];
$pass = $_POST['pass'];

$q = " select username,password from register where username='$name'  and password='$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
$_SESSSION['uname'] = $name;
header('location:explore.php');
}
else
{
header('location:login.php');
}
?>