<!-- Whubs.com - Download Free Responsive Website Layout Templates designed on HTML5 CSS3,Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross browser supported, best quality world class designs. -->
<!DOCTYPE html>
<html>
<head>
	<title>Web Development Company Template - W3hubs.com</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Whubs.com - Download Free Responsive Website Layout Templates designed on HTML5 CSS3,Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross browser supported, best quality world class designs.">
    <meta name="author" content="W3hubs.com">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-mynav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <li><i class="fa fa-facebook"></i></li>
         <li><i class="fa fa-twitter"></i></li>
         <li><i class="fa fa-linkedin"></i></li>
         <li><i class="fa fa-pinterest"></i></li>
         <li><i class="fa fa-google-plus"></i></li>
        <li><i class="fa fa-youtube"></i></li>
        <li><i class="fa fa-dribbble"></i></li>
      </ul>
     </div>
  </div>
</nav>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">W3hubs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="col">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Brand</a></li> 
        <li><a href="#">Career</a></li>
         <li><a href="#">Support</a></li> 
         <li><a href="#">Enquiry</a></li> 
         <li><a href="#">Feedback</a></li> 
         <li><a href="#">Contact</a></li>
         <li><a href="#"><i class="fa fa-search"></i></a></li>  
      </ul>
     </div>
  </div>
</nav>

<section id="home">
	<div class="container">
		<h3>Welcome to W3hubs</h3>
		<p>“Download Free Responsive Website Layout Templates designed on HTML5 CSS3,Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross browser supported, best quality world class designs.”</p>
	</div>
</section>


	<div id="slideshow">
   <div>
     <img src="img/1.png" class="img-responsive">
   </div>
   <div>
     <img src="img/2.png" class="img-responsive">
   </div>
  <div>
     <img src="img/3.png" class="img-responsive">
   </div>
   
</div>

<section id="middle">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 item">
			 <i class="fa fa-mobile"></i>
			<h3>Technology</h3>
			<hr>

			 <div class="item-overlay top">
			 	<i class="fa fa-mobile"></i>
			 	<h3>Technology</h3>
			 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
			</div>
			<div class="col-md-3 col-sm-3 item">

				<i class="fa fa-clock-o"></i>
				<h3>Value</h3>
					<hr>
				    <div class="item-overlay top">
					<i class="fa fa-clock-o"></i>
					<h3>Value</h3>
				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 item">
				<i class="fa fa-cogs"></i>
				<h3>Fast</h3>
				<hr>
				    <div class="item-overlay top">
					<i class="fa fa-cogs"></i>
					<h3>Fast</h3>
				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 item">
				<i class="fa fa-globe"></i>
				<h3>Existence</h3>
				<hr>
				    <div class="item-overlay top">
					<i class="fa fa-globe"></i>
					<h3>Existence</h3>
				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				</div>
		</div>
		
	</div>
</section>
<section id="whyus">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<i class="fa fa-handshake-o"></i>
			</div>
			<div class="col-md-6 col-sm-12">
				<h4>Why Us</h4>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>
		</div>
	</div>
</section>

<section id="contact">
	<?php
if(!isset($_POST["submit"]))
{
?>
	<div class="container">
		<h3>Contact Us</h3>
		<form action="" method="POST">
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<input type="text" name="uname" class="form-control" placeholder="Enter Your Full Name" required>
			</div>
			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="Enter Your Email Id" required>
			</div>
			<div class="form-group">
				<input type="number" name="number" class="form-control" placeholder="Enter Your Mobile Number" required>
			</div>
			</div>
			<div class="col-md-6">		
			<div class="form-group">
				<textarea name="message" class="form-control" rows="5" placeholder="Enter Your Name" required></textarea>
			</div>
		</div>
		<button type="submit" name="submit" class="btn btn-success btn-lg pull-right">Send</button>	
			</div>
		</div>
			</form>
</section>
<?php
}
else{
	if (isset($_POST["uname"]))
	 {
		$uname=$_POST["uname"];
		$email=$_POST["email"];
		$number=$_POST["number"];
		$message=$_POST["message"];

		$message=wordwrap($message,70);
		mail("enter your email id",$message,"Username:$uname\nemail:$email\nnumber:$number\nmessage:$message\n");
		echo "Thank you for sending us feedback.";
		
	}
}
?>
<footer>
	<p>Copyright 2018 - W3hubs.com</p>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
</body>
</html>