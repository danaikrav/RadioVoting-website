<?php
	include 'inc/config.inc.php';

	$firstName = $db->real_escape_string($_POST['firstname']);
	$lastName = $db->real_escape_string($_POST['lastname']);
	$email = $db->real_escape_string($_POST['email']);
	$birthdayDate = $_POST['birthdaydate'];
	$password = $db->real_escape_string($_POST['password']);
	$newDate = date("Y-m-d", strtotime($birthdayDate));
	$confirmpassword = $db->real_escape_string($_POST['confirmpassword']);




	if($password == $confirmpassword){
		$sql= "insert into users(firstname,lastname,email,birthdaydate,password) 
			values('$firstName','$lastName','$email','$newDate','$password') ";
		$db->query($sql);
		header("Location:login.php");
	}else{
		echo '
			<script>
				alert("Password is incorrect");
				window.location = "login.php";

			</script>
		'	;
	}
	
?>
