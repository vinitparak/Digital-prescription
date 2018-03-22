<?php
require('conn.php');
if(! get_magic_quotes_gpc() )
{
 $username= addslashes($_POST['name']);
 $email= addslashes($_POST['email']);
 $usermobile =addslashes ( $_POST['mobile']);
 $password = addslashes($_POST['pass']);
} 
else
{
  $username= $_POST['name'];
  $email= $_POST['email'];
  $usermobile =$_POST['mobile'];
  $password = $_POST['pass'];
}

$sql = "INSERT INTO usersinfo".
       "(username,password,email,mobile)".
       "VALUES".
       "('$username','$password','$email','$usermobile')";
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
die('not created'.mysqli_error($conn));
}
mysqli_close($conn);


	echo  "<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank you for registration');
    window.location.href='loginprocess.php';
    </SCRIPT>";
	

?>
