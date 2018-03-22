<?php 
require('value.php');
    session_start();
    if(!isset($_SESSION['username']))
   {
  $var1='Login';
    $var2='Register';
	$var3=0;
	  $link1='loginprocess.php';
    $link2='registered.php';
	$cartlink='loginprocess.php';
	$log='loginprocess.php';
	$logv='login';
	$prov='Create New Account';
	$pro='registered.php';
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
<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">

<!--meta-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="canonical" href="https://www.rollingrent.in/">

  <!--meta-->
  <!--css-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="js/main.js"></script>
<!--search jQuery-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
	
	
	     




 </script>
 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
 
</head>
<body>
	<!--header-->
		<div class="header">
			
					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="index.html">Register<span></span></a></h1><br>
						</div>
						<div class="top-right">
					            <ul class="links">
								   <a href="<?php echo $link1;?>"><button id="myH1" style="margin-bottom:10px;" type="button" class="btn btn-info" ><?php echo $var1;?></button></a>
                                                       
								</ul>
						</div>
						

<script> 
if ( $(window).width() > 739) {      
document.getElementById("myH1").style = "";
} 
else {
  //Add your javascript for small screens here 
}   </script>


					</div>
						
<div class="topnav" id="myTopnav" >
						
				

  

</div>


<style>



.badge {
  padding: 0px 0px 0px;
  font-size: 12px;
  font-weight: bold;
  white-space: nowrap;
  color: #FFF;
  background-color: #0d59af;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}

</style>
</div>
	

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}



</script>








</script>

		<!--header-->
	
<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form id="form" action="register.html" method="post">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" placeholder="Username" name="name" required>
							<div class="clearfix"></div>
						</div>
						<span id='emailstatus'></span>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" placeholder="Email" id="email" onkeyup='checkmail();' name="email"  required>
							<div class="clearfix"></div>
						</div>
						<span id='spnPhoneStatus'></span>
						<div class="key">
							<i class="fa fa-mobile" aria-hidden="true"></i>
							<input  type="text" id="txtPhone" placeholder="Mobile"  onkeyup='checkno();' name="mobile"  required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" placeholder="Password"  id="password"  onkeyup='check();'  name="pass" required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" placeholder="Confirm Password"  id="confirm_password"	 onkeyup='check();' name="Confirm Password" required>
							<div class="clearfix"></div>
						</div>
						<span id='message'></span>
						
						<input type="submit" id='submit' value="Submit">
					</form>
				</div>
				
			</div>
		</div>
				<!--login-->
		</div>
		<!--content-->
	
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy; 2018 Smart India Hackthon.All rights reserved</p>
							</div>
							<div class="copy-right">
								<img src="images/card.png" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				<!--copy-->
					
					<script>
			var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password Matching';
    document.getElementById('form').action = 'register.php';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password Not matching';
	 document.getElementById('form').action = 'registered.php';
  }
}

function checkno() {
    var a = document.getElementById('txtPhone').value;
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;

    if (filter.test(a)) {
		 if(a.length==10){
         document.getElementById('spnPhoneStatus').style.color = 'green';
            document.getElementById('spnPhoneStatus').innerHTML = '';
    }}
    else {
			 document.getElementById('spnPhoneStatus').style.color = 'red';
    document.getElementById('spnPhoneStatus').innerHTML = 'Please Enter Valid Mobile No.';
	 document.getElementById('form').action = 'registered.php';
        
    }
}




function checkmail() {
    var a = document.getElementById('email').value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (filter.test(a)) {
		 
         document.getElementById('emailstatus').style.color = 'green';
            document.getElementById('emailstatus').innerHTML = '';
    }
    else {
    	 document.getElementById('emailstatus').style.color = 'red';
    document.getElementById('emailstatus').innerHTML = 'Please Enter Valid Email';
	 document.getElementById('form').action = 'registered.php';
    }
}

</script>
				

</body>
<script>
       
        $(document).ready(function(){
            $('body').find('img[src$="https://cloud.githubusercontent.com/assets/23024110/20663010/9968df22-b55e-11e6-941d-edbc894c2b78.png"]').parent().closest('a').closest('div').remove();
        });
</script>
</html>