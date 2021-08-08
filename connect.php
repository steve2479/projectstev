<?php
error_reporting(0);
//  $db = mysqli_select_db('cman',@mysqli_connect('localhost','root',''));
$conn = mysqli_connect('localhost', 'root', '1Billion$$', 'cman');
$password = getenv('DB_PASSWORD', true);
echo $password;
//  die($db);
