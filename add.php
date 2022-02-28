<?php  session_start(); ?>

<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add orders</title>
   
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


</head>
<body class="bg-light">

          <form action="add2.php" method="post">
     <table width="25%" border="0">
            <tr>
                <td>Frist Name</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Sender's address</td>
                <td><input type="text" name="add1"></td>
            </tr>
            <tr>
                <td>Phone no</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>Reciever's address</td>
                <td><input type="text" name="add2"></td>
            </tr>
            <tr>
                <td>State</td>
                <td><input type="text" name="state1"></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><input type="text" name="zip"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="submit"></td>
            </tr>
        </table>
</form>
        <?php
            //include "includes/footer.php";
        ?>
  </div>	<!-- /container -->

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
 // include "includes/footer.php"
 ?>
      <!--js-->
<script src="boostrap/js/bootstrap.js"></script>
  <!--  </div> -->
</body>

</html>