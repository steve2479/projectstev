<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_kid'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROm sundays where id='$id[$i]'");
}
header("location: sschoolDetail.php");
}
?>