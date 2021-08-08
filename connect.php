<?php

include("./app/DotEnv.php");
(new DotEnv(__DIR__ . '/.env'))->load();
$host = getenv('DB_HOST');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');
$conn = mysqli_connect(strval($host), strval($username), strval($password), strval($db_name));
// print_r($conn);
// var_dump($conn);
