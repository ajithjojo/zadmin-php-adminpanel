<?php
	include('../codes/config.php');

	$sql = file_get_contents('dbfile.sql');

	if ($conn->multi_query($sql)) {
	    header("location:index.php?act=user");	
} else {
   	
   	 header("location:index.php?act=db&stat=installerror");	
}

?>