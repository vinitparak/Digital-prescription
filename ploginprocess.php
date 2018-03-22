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
<title>Patient</title>
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
							<h1><a href="index.php">Patient Index <span></span></a></h1><br>
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


		<!--header-->	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Patient Panel</h3>
						<form action="plogin.php" method="post">
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="Email" id='email' name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="Password" id='password' name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
						</form>
					</div>
					<div class="forg">
						<a href="forgot.php" class="forg-left">Forgot Password</a>
						<a href="registered.php" class="forg-right">Register</a>
					<div class="clearfix"></div>
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
								<p>&copy; 2018 Smart India Hackthon. All rights reserved </a></p>
							</div>
							<div class="copy-right">
								<img src="images/card.png" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				<!--copy-->
</body>
<script>
       
        $(document).ready(function(){
            $('body').find('img[src$="https://cloud.githubusercontent.com/assets/23024110/20663010/9968df22-b55e-11e6-941d-edbc894c2b78.png"]').parent().closest('a').closest('div').remove();
        });
</script>
</html>