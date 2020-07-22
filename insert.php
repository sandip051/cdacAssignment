<?php
include_once("config.php");



if(isset($_POST['Submit'])) {

	    $name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];


	$sql ="insert into student(name,email,mobile) values('$name','$email','$mobile')";
	$res1 =mysqli_query($conn,$sql);
	if($res1)
	{
		echo"Data insert";
	}
	else
	{
		echo"fail";
	}
	
	
	
}

?>