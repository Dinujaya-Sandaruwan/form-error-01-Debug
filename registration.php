<!DOCTYPE html>
<html>
<head>
   
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
 
</head>
<body>
   
 <?php
     //include "includes/nav_1.php"
 ?>



  <div class="all">
       
 	<div class="container">

<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active">Registration</li>
</ol>

<div class="row">
    

<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$create_datetime = date("Y-m-d H:i:s");
	if($user == "" || $pass == "" || $name == "" || $email == "" ) {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='registration.php'>Go back</a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO login(name, email, username, password, create_datetime) VALUES('$name', '$email', '$user', '$pass' ,' $create_datetime')")
			or die("Could not execute the insert query.");
			
		echo "Registration successfully Click";
		echo "<br/>";
		echo "<a href='login.php'>Login</a>";
		echo "continue";
	}
} else {
?>


	<!-- Article main content -->
    <article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">Already registerd then go to <a href="login.php">Login</a>. </p>
							<hr>

							<form action="" method="post"> 
								<div class="top-margin">
									<label> Full Name</label>
									<input type="text" name="name" class="form-control" placeholder="you're name">
								</div>
								<form action="" method="post"> 
								<div class="top-margin">
									<label> username</label>
									<input type="text" name="username" class="form-control" placeholder="you're name">
								</div>
								<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span></label>
									<input type="text" name="email" class="form-control" placeholder="email">
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										<input type="password" class="form-control" name="password">
									</div>
									<br>
								</div>
<br><br><br>
								<hr> <br>  <br><br><br>          
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" name="submit" type="submit">Register</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				<br><br>
			</article>
            <br><br><br><br>
			<!-- /Article -->

<?php
    }
?>
</div>

  <!--footer-->


	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Ashland City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow us</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href="#"><i class="fa fa-twitter fa-2"></i></a>
								<a href="#"><i class="fa fa-dribbble fa-2"></i></a>
								<a href="#"><i class="fa fa-github fa-2"></i></a>
								<a href="#"><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Thank you for visiting</h3>
						<div class="widget-body">
							<p>I am oshadha dewmith. I create this web site for learning purposes.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Home</a> | 
								<a href="aboutus.php">About us</a> |

								<a href="Login.php">Log in</a> |
								<b><a href="registration.php">Register</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2022, Oshadha Dewmith. 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>




  <?php
 //include "includes/footer.php"
 ?>
</body>
</html>
