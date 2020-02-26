<?php 
	$iduser = isset($_POST['iduser']) ? $_POST['iduser'] : '';
	$idbus = isset($_POST['idbus']) ? $_POST['idbus'] : ''; 
	$frP = isset($_POST['frP']) ? $_POST['frP'] : '';
	$toP = isset($_POST['toP']) ? $_POST['toP'] : '';
	$messages = array();
	$ok = true;
	include 'Function.php';
	$name = getUserName($iduser);
	if ($frP == $toP){
		$ok = false;
		$messages[] = 'Hai địa điểm không thể trùng nhau!';
	}
	if ($ok){
		$carSTT = getCarSTT($idbus);
		$succhua = getSucChua($idbus);
		$moneynow = getMoney($iduser);
		$cost = getCost($idbus);
		if ($succhua == $carSTT){
			$ok = false;
			$messages[] = 'Xe đã hết chổ vui lòng chọn xe khác có cùng tuyến!';
		}
		else if (($moneynow - $cost) < 0){
			$ok = false;
			$messages[] = 'Số tiền hiện tại của bạn không đủ để sử dụng dịch vụ!';
			$messages[] = 'Vui lòng nạp thêm tiền để sử dụng dịch vụ!';
		}
		else {
			include 'connection.php';
			$idhd = getMaxIDHD() +1;
			$datenow = date("Y/m/d");
			$sql1 = "insert into hoadon values(".$idhd.",'".$iduser."','".$idbus."','".$frP."','".$toP."',1,'".$datenow."',0)";
			mysqli_query($db,$sql1);
			$sql2 = "UPDATE taikhoan set stt=1 where iduser =".$iduser;
			mysqli_query($db,$sql2);
			$nowstt = $carSTT + 1;
			$sql3 = "update xe set tinhtrang =".$nowstt." where soxe=".$idbus;
			mysqli_query($db,$sql3);
			$ok = true;
			$messages[] = 'Đặt xe thành công!';
		}
	}
	echo json_encode(
        array(
        	'ok' => $ok,
            'messages' => $messages,
            'id' => $iduser,
            'idbus' => $idbus,
            'name' => $name
        )
    );
?>