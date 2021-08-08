<?php
include('lib/dbcon.php');
include("../app/DotEnv.php");
(new DotEnv('../.env'))->load();
$host = getenv('DB_HOST');
$user = getenv('DB_USERNAME');
$pass = getenv('DB_PASSWORD');
$db  = getenv('DB_NAME');
dbcon($host, $user, $pass, $db);
include('session.php');

$oras = strtotime("now");
$ora = date("Y-m-d", $oras);
mysqli_query($conn, "update user_log set
logout_Date = '$ora'												
where student_id = '$session_id' ") or die(mysqli_error());

session_destroy();
header('location: ../');
