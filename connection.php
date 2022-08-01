
<?php
$con = mysqli_connect('localhost','root','','elearning');
if(!$con){
	die("Database connection failed") . mysqli_error($con);
} 
?>