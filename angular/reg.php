
<?php
include 'dbcon.php';
	
	header("Access-Control-Allow-Origin:*");
	header("Access-Control-Allow-Methods:PUT,GET,POST");
	header("Access-Control-Allow-Headers:Origin,X-Requested-With,Content-Type,Accept");
	$postdata=file_get_contents("php://input");
	$request=json_decode($postdata);
	$username=mysqli_real_escape_string($con,trim($request=>data=>username));
	$password=mysqli_real_escape_string($con,trim($request=>data=>password));
	$result=mysqli_query($con,"insert into `registration`(`username`,`password`)values('$username','$password')");
	if($result)
	{
		$student=['username'=>$username,'password'=>$password,'id'=>mysqli_insert_id($con)];
		echo json_encode(['data'=>$student]);
	}

?>