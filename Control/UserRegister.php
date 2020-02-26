<?php
	$username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $re_password = isset($_POST['repassword']) ? $_POST['repassword'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
	$userID=NULL;
    $ok = true;
    $messages = array();
    if ( !isset($username) || empty($username) ) {
        $ok = false;
        $messages[] = 'Tài khoản không được để trống!';
    }
    if ( !isset($password) || empty($password) ) {
        $ok = false;
        $messages[] = 'Mật khẩu không được để trống!';
    }
    if ( !isset($re_password) || empty($re_password) ) {
        $ok = false;
        $messages[] = 'Xác nhân mật khẩu không được để trống!';
    }
    if ( $password != $re_password) {
        $ok = false;
        $messages[] = 'Mật khẩu và Xác nhận mật khẩu không trùng nhau!';
    }
    if ($ok) {
    	include 'connection.php';
        include 'Function.php';
	    $sql = "SELECT iduser FROM taikhoan WHERE username= '$username' limit 1";
	    $result = mysqli_query($db,$sql);
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $count = mysqli_num_rows($result);
		if($count != 1) {
            $maxid = getMaxID() +1;
            $userID = $maxid;
            $sql1 = "INSERT into taikhoan VALUES(".$maxid.",'".$username."','".$password."','0')";
            $sql2 = "INSERT into thongtin VALUES(".$maxid.",'".$name."',0)";
            mysqli_query($db,$sql1);
            mysqli_query($db,$sql2);
            $messages[] = 'Tài khoản đã tạo thành công! Tài khoản hiện tại là 0đ vui lòng nạp tiền để sử dụng dịch vụ!';
            $ok = true;
	    }else {
	        $ok = false;
	        $messages[] = 'Tài khoản đã tồn tại!';
	    }
    }
    echo json_encode(
        array(
            'Name' => $name,
        	'ID' => $userID,	
            'ok' => $ok,
            'messages' => $messages
        )
    );
?>