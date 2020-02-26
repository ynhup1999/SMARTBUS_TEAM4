<?php
	$iduser = isset($_GET['ID']) ? $_GET['ID'] : '';
	$name = isset($_GET['name']) ? $_GET['name'] : '';
	$idbus = isset($_GET['idbus']) ? $_GET['idbus'] : '';
	include 'connection.php';
	$sql = 'update taikhoan set stt = 2 where iduser='.$iduser;
	mysqli_query($db,$sql);
	header("location: ../CheckPoint.php?ID=".$iduser."&name=".$name."&idbus=".$idbus);
?>