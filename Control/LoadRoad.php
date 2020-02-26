<?php
	$busnum = isset($_POST['busnum']) ? $_POST['busnum'] : '';
    $ok = true;
    $messages = array();
    $frPlace = array();
    $toPlace = array();
    if ( !isset($busnum) || empty($busnum) ) {
        $ok = false;
        $messages[] = 'Không tìm thấy Số Xe';
    }
    if ($ok) {
    	include 'connection.php';
        $ok = true;
        $messages[] = 'Đã hiện thị danh sách điểm đến/dừng bên dưới';
        $sql = 'SELECT tendiem FROM diem,tuyen where diem.sotuyen = tuyen.sotuyen and tuyen.soxe = '.$busnum;
        $result = mysqli_query($db,$sql);
        while ($row = mysqli_fetch_array($result)){
            $frPlace[] = $row['tendiem'];
            $toPlace[] = $row['tendiem'];
            //echo $row['tendiem']. "\n";
        }
    }
    echo json_encode(
        array(
            'frPlace' => $frPlace,
            'toPlace' => $toPlace,
        	'ok' => $ok,
            'messages' => $messages
        )
    );
?>