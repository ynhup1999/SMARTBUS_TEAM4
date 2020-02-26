<?php 
	$iduser = isset($_POST['iduser']) ? $_POST['iduser'] : '';
	$digit = isset($_POST['digitnumber']) ? $_POST['digitnumber'] : '';
	$messages = array();
	$ok = true;
	include 'Function.php';
	$name = getUserName($iduser);
	if (!isset($digit) || empty($digit)){
		$ok = false;
		$messages[] = 'Mã thẻ không được để trống!';
	}
	if (!checkCard($digit)){
		$ok = false;
		$messages[] = 'Mã thẻ không hợp lệ!';
	}
	if (CheckCardUser($digit)){
		$ok = false;
		$messages[] = 'Thẻ đã có người sử dụng!';
	}
	if ($ok){
		$moneynow = getMoney($iduser);
		$pricecard = getPriceCard($digit);
		$final = $moneynow + $pricecard;
		$datenow = date("Y/m/d");
		include 'connection.php';
		$sql = "update thongtin set sotien=".$final." where iduser=".$iduser;
		mysqli_query($db,$sql);
		$sql2 = "update moneycard set iduser = ".$iduser." ,dateuse = '".$datenow."' where idcard=".$digit;
		mysqli_query($db,$sql2);
		$ok = true;
		$messages[] = 'Nạp thành công!';
	}
	echo json_encode(
        array(
        	'ok' => $ok,
            'messages' => $messages,
            'id' => $iduser,
            'name' => $name
        )
    );
?>