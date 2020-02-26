<?php
	$iduser = isset($_GET['ID']) ? $_GET['ID'] : '';
	$name = isset($_GET['name']) ? $_GET['name'] : '';
	$idbus = isset($_GET['idbus']) ? $_GET['idbus'] : '';
	include 'connection.php';
	include 'Function.php';
	$datenow  = date("Y/m/d");
	$carSTT = getCarSTT($idbus);
	$succhua = getSucChua($idbus);
	$sql = 'update taikhoan set stt = 0 where iduser='.$iduser;
	mysqli_query($db,$sql);
	$sql1 = "update hoadon  set tinhtrang = 1 where iduser =".$iduser." and tinhtrang=0 and soxe =".$idbus." and ngaydat = '".$datenow."'";
	mysqli_query($db,$sql1);
	$money = getMoney($iduser);
	$cost = getCost($idbus);
	$final = $money - $cost;
	$sql2 = "update thongtin set sotien=".$final." where iduser=".$iduser;
	mysqli_query($db,$sql2);
	$nowstt = $carSTT -1;
	$sql3 = "update xe set tinhtrang =".$nowstt." where soxe=".$idbus;
	mysqli_query($db,$sql3);
	header("location: http://localhost:8080/SmartBus/user.php?ID=".$iduser."&name=".$name);
?>