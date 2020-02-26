<?php
	$digit = isset($_GET['digit']) ? $_GET['digit'] : '';
	$date = isset($_GET['date']) ? $_GET['date'] : '';
	$cost = isset($_GET['cost']) ? $_GET['cost'] : '';
	include 'connection.php';
	$sql = "insert into moneycard values(-1,".$digit.",'".$date."',".$cost.")";
    mysqli_query($db,$sql);
   	header('location: ../Login.php');
?>