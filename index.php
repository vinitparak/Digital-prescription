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
<body>

    <div class="w3-containe example1">
    <img src="1.jpg"> 
    </div>
    <style type="text/css">
        .example1 {
            width: 100%;
            height: auto;
    }</style>
<div class="form">    
<h1>Doctor Prescription </h1>

<form>
<input class="box" type="email" name="field2"  id="to" placeholder="Email Address" />
<textarea class="box" name="field3" id="chat" placeholder="Drug Name"></textarea>
<textarea class="box" name="field3" placeholder="Type your Message" id="msg"></textarea>
<input class="box button" type="button" onclick="showUser()" value="Send" />
</form>
</div>

</body>
<style type="text/css">
body {
	background-color: #67CE78;
}
.form{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form h1{
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.box
{
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}
.box
{
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
}

.button{
    width: 100%;
    padding: 3%;
    background: #43D1AF;
    border-bottom: 2px solid #30C29E;
    color: #fff;
}
.button:hover{
    background: #2EBC99;
}
</style>

<script>
function showUser() {
var str=document.getElementById("chat").value; 
var str2=document.getElementById("to").value; 
var str3=document.getElementById("msg").value; 
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
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
        xmlhttp.open("GET","tablet.php?a="+str+"&b="+str2+"&c="+str3,true);
        xmlhttp.send();
    }
}
</script>