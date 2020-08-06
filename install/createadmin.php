<?php
	include('../codes/config.php');

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$created =date('Y-m-d');

	if($name==NULL || $email==NULL || $password==NULL)
	{
		header("location:index.php?act=user&stat=fill");	
	}
	else
	{
		// encript 
		$password=md5(sha1($password));
		//database insert
		mysqli_query($conn,"INSERT INTO `admins` (`name`,`email`,`password`,`created`,`status`) VALUES
		('$name','$email','$password','$created','1')"); 

		header("location:index.php?act=thanks");
	}
   	
   	 


?>