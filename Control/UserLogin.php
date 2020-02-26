<?php
	$username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
	
	$userID=NULL;
    $ok = true;
    $messages = array();
    $name = 'Error NOT Found Name';
    if ( !isset($username) || empty($username) ) {
        $ok = false;
        $messages[] = 'Tài khoản không được để trống!';
    }
    if ( !isset($password) || empty($password) ) {
        $ok = false;
        $messages[] = 'Mật khẩu không được để trống!';
    }
    if ($ok) {
    	include 'connection.php';
	    $sql = "SELECT iduser FROM taikhoan WHERE username= '$username' and password='$password' limit 1";
	    $result = mysqli_query($db,$sql);
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $count = mysqli_num_rows($result);
		if($count == 1) {
            $userID = $row['iduser'];
			$ok = true;
			$messages[] = 'Đăng nhập thành công!';
            include 'Function.php';
            $name = getUserName($userID);
	    }else {
	        $ok = false;
	        $messages[] = 'Sai tài khoản mật khẩu!';
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