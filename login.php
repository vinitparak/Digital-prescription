<?php
require('conn.php');
if(! get_magic_quotes_gpc() )
{
$useremail= addslashes($_POST['email']);
$userpass =addslashes ( $_POST['pass']);
}
else
{
 $useremail= $_POST['email'];
 $userpass =$_POST['pass'];
}
$useremail = stripslashes($useremail);
$userpass= stripslashes($userpass);
$sql = "select * from usersinfo ".
       " where email='$useremail' and password='$userpass'";
$ret=mysqli_query($conn,$sql);
$count=mysqli_num_rows($ret);
$row = mysqli_fetch_assoc($ret);
if($count==1){
session_start();
$error=true;
$_SESSION["username"]=$row["Username"];
$_SESSION["email"]=$row["Email"];
header('location:index.php');
}
else {
echo  "<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Wrong Username Password,try again');
    window.location.href='loginprocess.php';
    </SCRIPT>";
}
mysqli_close($conn);
?>