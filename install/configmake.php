<?php

$host = $_POST['host'];
$username = $_POST['user'];
$password = $_POST['pass'];
$db_name = $_POST['db'];
 

$conn = mysqli_connect($host, $username, $password, $db_name);
if (mysqli_connect_errno())
  {
	 header("location:index.php?act=db&stat=errordb");	
  } 	
  else
  {	
	if($host==NULL || $username==NULL || $db_name==NULL)
	{
		header("location:index.php?act=db&stat=error");	
	}
	else {


	$my_file = '../codes/config.php';
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = '<?php
	session_start();
	$host ="'.$host.'";
	$dbuser ="'.$username.'";
	$dbpass ="'.$password.'";
	$db_name ="'.$db_name.'";
	error_reporting(0);

	$conn = mysqli_connect($host, $dbuser, $dbpass, $db_name);
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  } 

	  if(isset($_SESSION["admin"])){
	  $adminid = $_SESSION["admin"];

	} 
	else{
		$adminid="";
	}
	?>';

	 
	fwrite($handle, $data);

	 header("location:installdb.php");

	}
}
?>