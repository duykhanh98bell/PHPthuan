<?php
	session_start();
	include("modules/connectionpro.php");

	if (isset($_POST["id"]) || isset($_POST["soluong"])) {
		$id = $_POST["id"];
		$soluong = $_POST["soluong"];
		$sql = "SELECT * FROM `product` WHERE pro_id = '".$id."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if (!isset($_SESSION["cart"])) {
			$cart[$id] = array(
				'name' => $row["pro_name"] , 
				'image' => $row["img"] , 
				'price' => $row["price"] , 
				'number' => $soluong  
			);
		}else{
			$cart = $_SESSION["cart"];
			if (array_key_exists($id, $cart)) {
				$cart[$id] = array(
					'name' => $row["pro_name"] , 
					'image' => $row["img"] , 
					'price' => $row["price"] , 
					'number' => (int)$cart[$id]["number"] + $soluong  
				);
			}else{
				$cart[$id] = array(
					'name' => $row["pro_name"] , 
					'image' => $row["img"] , 
					'price' => $row["price"] , 
					'number' => $soluong  
				);
			}
		}
		$_SESSION["cart"] = $cart;
		echo "<pre>";
		print_r($_SESSION["cart"]);
	}
?>