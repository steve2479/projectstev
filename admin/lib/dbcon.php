<?php
//core
$conn;

function dbcon($host, $user, $pass, $db)
{
	global $conn;
	$user = $user;
	$pass = $pass;
	$host = $host;
	$db = $db;
	$conn = mysqli_connect($host, $user, $pass, $db) or die("cannot connect to the database");
}


function host(){
	$h = "http://".$_SERVER['HTTP_HOST']."/bankdb/";
	return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/bankdb/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}
