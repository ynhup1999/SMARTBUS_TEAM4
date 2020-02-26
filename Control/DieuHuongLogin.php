<?php
	$iduser = isset($_GET['ID']) ? $_GET['ID'] : '';
	$name = isset($_GET['name']) ? $_GET['name'] : '';
	include 'Function.php';
	$stt = getSTT($iduser);
	if ($stt == 0) {
		header('location: ../user.php?ID='.$iduser.'&name='.$name);
	}
	if ($stt == 1){
		$idbus = getLastIDBUSuse($iduser);
		header('location: ../waiting.php?ID='.$iduser.'&name='.$name.'&idbus='.$idbus);
	}
	if ($stt == 2){
		$idbus = getLastIDBUSuse($iduser);
		header('location: ../CheckPoint.php?ID='.$iduser.'&name='.$name.'&idbus='.$idbus);
	}
?>