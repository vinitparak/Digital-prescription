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
<head>
	<title>Patient</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  background-color: #f4511e;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}
.h1 {
	text-align: center;
}
.button:hover {opacity: 2;}
</style>
</head>
<body>


<h1 class="h1">Patient</h1>
<div id="txtHint"></div>
<button  onclick="showUser()" class="button">Show Message</button>
<a href="map.html"><button class="button">Near By Pharmacy</button>
</a>

</body>
<script>
function showUser() {

    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ptablet.php?a=hi",true);
        xmlhttp.send();
    
}
</script>
</html>
