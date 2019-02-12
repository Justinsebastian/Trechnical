
<?php
include 'dbcon.php' ;
if(isset($_POST['submit']))
{
	
	
	$result=mysqli_query($con,"insert into `sample`(`email`,`password`)values('$n','$a')");
	header("Access-Control-Allow-Origin:*");
	header("Access-Control-Allow-Methods:PUT,GET,POST");
	header("Access-Control-Allow-Headers:Origin,X-Requested-With,Content-Type,Accept");
	$postdata=file_get_contents("php://input");
	$username=mysqli_real_escape_string($con,trim($request=>data=>username));
	$password=mysqli_real_escape_string($con,trim($request=>data=>password));
}
?>