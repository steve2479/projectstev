<?php
include("./connect.php");

if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login_query = mysqli_query($conn, "select * from members where mobile='$username' and password='$password'");
	$count = mysqli_num_rows($login_query);
	$row = mysqli_fetch_array($login_query);


	if ($count > 0) {
		session_start();
		$_SESSION['id'] = $row['id'];
		header('location:members/dashboard.php');
	} else {
		header('location:index.php');
	}
}
