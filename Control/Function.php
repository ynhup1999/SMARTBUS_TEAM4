<?php
	function getUserName($IDuser){
		include 'connection.php';
		$sql = "Select name from thongtin where iduser = '$IDuser' limit 1";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		return $row->name;
	}
	function getMaxID(){
		include 'connection.php';
		$sql = "SELECT max(iduser) as max FROM taikhoan limit 1";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		return $row->max;
	}
	function getMoney($IDuser){
		include 'connection.php';
		$sql = "Select sotien from thongtin where iduser='$IDuser' limit 1";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		return $row->sotien;
	}
	function randCard(){
		$number = rand(100000000,999999999);
		include 'connection.php';
		$sql = "Select count(idcard) as num from moneycard where idcard='$number'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		$count = $row->num;
		if ($count > 0) randCard();
		else return $number;
	}
	function getSTT($IDuser){
		include 'connection.php';
		$sql = "Select stt as Num from taikhoan where iduser = ".$IDuser." limit 1";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		return $row->Num;
	}
	function getMaxIDHD(){
		include 'connection.php';
		$sql = "SELECT max(mahd) as Num from hoadon";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		if ($row->Num == NULL or $row->Num == 0) return 0;
		else return $row->Num;
	}
	function getLastIDBUSuse($iduser){
		include 'connection.php';
		$datenow  = date("Y/m/d");
		$sql = "SELECT soxe from hoadon WHERE iduser = ".$iduser." and ngaydat = '".$datenow."' and tinhtrang = 0 LIMIT 1";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		return $row->soxe;
	}
	function getCarSTT($idbus){
		include 'connection.php';
		$datenow  = date("Y/m/d");
		$sql = "SELECT tinhtrang from xe WHERE soxe = ".$idbus." LIMIT 1";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		return $row->tinhtrang;
	}
	function getSucChua($idbus){
		include 'connection.php';
		$datenow  = date("Y/m/d");
		$sql = "SELECT soghe from xe WHERE soxe = ".$idbus." LIMIT 1";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		return $row->soghe;
	}
	function getCost($idbus){
		include 'connection.php';
		$sql = "SELECT giatien from tuyen WHERE soxe = ".$idbus." LIMIT 1";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		return $row->giatien;
	}
	function getPriceCard($digit){
		include 'connection.php';
		$sql = "select price from moneycard where idcard = ".$digit." Limit 1";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		return $row->price;
	}
	function checkCard($digit){
		include 'connection.php';
		$sql = "select count(*) as Num from moneycard where idcard = ".$digit;
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_object($result);
		$count = $row->Num;
		if ($count > 0) return true;
		else return false; 
	}
	function CheckCardUser($digit){
		include 'connection.php';
		$sql = "select iduser from moneycard where idcard = ".$digit;
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		$co = $row[0];
		if ($co != -1) return true;
		else return false; 
	}
?>