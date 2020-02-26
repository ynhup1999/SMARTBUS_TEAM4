<?php		
	$db = mysqli_connect("localhost","root","","smartbus");
	if (mysqli_connect_errno()){
		echo 'Lỗi kết nối Dữ Liệu Sever!';
	}
	mysqli_set_charset($db, 'UTF8');
?>