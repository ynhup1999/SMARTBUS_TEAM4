<?php
	$iduser = isset($_GET['ID']) ? $_GET['ID'] : '';
	$name = isset($_GET['name']) ? $_GET['name'] : '';
	$idbus = isset($_GET['idbus']) ? $_GET['idbus'] : '';
	include 'connection.php';
	$sql = 'update taikhoan set stt = 0 where iduser='.$iduser;
	mysqli_query($db,$sql);
	$sql1 = 'delete from hoadon where iduser ='.$iduser.' and tinhtrang=0 and soxe ='.$idbus;
	mysqli_query($db,$sql1);
	header("location: http://localhost:8080/SmartBus/user.php?ID=".$iduser."&name=".$name);
?>