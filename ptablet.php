<?php 
require('value.php');
    session_start();
    if(!isset($_SESSION['username']))
   {
 echo  "<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='loginprocess.php';
    </SCRIPT>";
    }
   else
   {
    $var1=$_SESSION['username'];
    $var3=$_SESSION['cart'];
    $var2='logout';
    $link1='myaccount.php';
    $cartlink='cart.php';
    $log='logout.php';
    $logv='logout';
    $prov='My Profile';
    $pro='myaccount.php';
    }
?>

<!DOCTYPE html>
<html>

<body>
<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,"ourdb");
if(!$conn)
{
die(' not connected'.'mysql_error()');
}
$a=$_GET['a'];



$sql = "select * from userchat where username='$var1'";


$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {

  $b=$row['chat'];
}


$sql = "select * from  store where c1='$b'";


$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)) {
	
	
echo
	 "     <div class="."media msg".">
                    

                        <h5 class="."media-heading".">". $row['brand']."</h5>
                
                    </div>
                </div>";
	
   }

mysqli_close($conn);
?>



</body>
</html>