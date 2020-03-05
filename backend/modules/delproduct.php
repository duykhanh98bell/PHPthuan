<?php  
	$id = $_GET["id"];
	$sqldetete = "DELETE FROM `product` WHERE pro_id = '$id'";
	mysqli_query($conn, $sqldetete);
	header('location: index.php?module=listproduct');
?>