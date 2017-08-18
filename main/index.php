<?php 
//error_reporting(0);

include("../config/connect.php");
if (isset($_POST['submit_form'])) {
	$name = $_POST['name'];
	$email = $_POST['email']; 
		
	$check_email = "SELECT * FROM users WHERE email='$email'";
	$run_email = mysql_query($check_email);
	$check = mysql_num_rows($run_email);

	if ($check == 1) {
			
		echo "<script>alert('This email is registered!!!')</script>";
		echo "<script>window.open('../index.php', '_self')</script>";
	}
	else{

		$insert = "INSERT INTO users(name, email) VALUES('$name', '$email')";
		$result = mysql_query($insert);
			
		if ($result) {
				
			echo "<script>alert('Successfully registered!!!')</script>";			
			echo "<script>window.open('../index.php', '_self')</script>";
		}					
	}
}
?>