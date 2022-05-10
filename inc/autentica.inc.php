<?php
if(session_id() == "") session_start();

include "inc/config.inc.php";

if (@$_REQUEST['logout']) {
	unset($_SESSION['user']);
	unset($_SESSION['iduser']);
}

if (@$_POST['email'] && @$_POST['password']){  //cames from login form

	$uuser= $db->real_escape_string($_POST['email']);

	if($uuser=="admineceradio@gmail.com"){
		$_SESSION['admin'] = true;
	}
	else{
		$_SESSION['admin'] = false;
	}
	//$upass= mypass($_POST['pass']);   /// encription of database
	$upass= $db->real_escape_string($_POST['password']);   /// encription of database

	$sql="SELECT id FROM users WHERE password='$upass' AND email='$uuser'";
	$result = $db->query( $sql);
	$num = $result->num_rows;

	if ($num<1) {
		header("Location: login.php");
	} else {
		$row = $result->fetch_assoc();
		$iduser=$row['id'];

		$_SESSION['user'] = $uuser;  // saves user in session
		$_SESSION['iduser'] = $iduser;
	}
	
} else if (!@isset($_SESSION['user'])) { // doesn't came from form
	header("Location: login.php");
}