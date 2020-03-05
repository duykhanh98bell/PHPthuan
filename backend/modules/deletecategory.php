<?php  
	include('connection.php');
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		$sql = "DELETE FROM `category` WHERE `cat_id` = '$id';";
		$conn->query($sql);
		header('location: index.php?module=listcategory ');
	}
?>