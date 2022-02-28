<?php session_start(); ?>

<!-- <?php
// if(!isset($_SESSION['valid'])) {
// 	header('Location: login.php');
// }
?> -->

<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include "connection.php";

if(isset($_POST['Submit'])) {	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$add1 = $_POST['add1'];
	$phone = $_POST['phone'];
	$add2 = $_POST['add2'];
	$state1 = $_POST['state1'];
	$zip = $_POST['zip'];
	
	$login_Id = $_SESSION['id'];

	$correct_form = 'true';
		
	// checking empty fields

	if (empty($fname)) {
		echo "<font color='red'>Frist Name field is empty.</font><br/>";
		$correct_form = 'false';
	  }
	if (empty($lname)) {
		echo "<font color='red'>last Name field is empty.</font><br/>";
		$correct_form = 'false';
	  }
	if (empty($uname)) {
		echo "<font color='red'>UserName field is empty.</font><br/>";
		$correct_form = 'false';
	}	
	if (empty($email)) {
		echo "<font color='red'>email field is empty.</font><br/>";
		$correct_form = 'false';
	}	
	if (empty($add1)) {
		echo "<font color='red'>senders address field is empty.</font><br/>";
		$correct_form = 'false';
	}	
	if (empty($phone)) {
		echo "<font color='red'>Phone no field is empty.</font><br/>";	
		$correct_form = 'false';	
	}	
	if (empty($add2)) {
		echo "<font color='red'>Recievers address field is empty.</font><br/>";
		$correct_form = 'false';
	}	
	if (empty($state1)) {
		echo "<font color='red'>state field is empty.</font><br/>";
		$correct_form = 'false';
	}	
	if (empty($zip)) {
		echo "<font color='red'>zip field is empty.</font><br/>";
		$correct_form = 'false';
	}

	
	if ($correct_form != 'flase') {
		$sql = "INSERT INTO products(name, login_id, fname, lname, add1, phone, add2, state, zip) VALUES ('$uname','$login_Id','$fname','$lname','$add1','$phone','$add2','$state1','$zip')";

		mysqli_query($mysqli, $sql);
	}
}

?>

</body>
</html>
