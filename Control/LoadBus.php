<?php
	include 'connection.php';
	$sql = 'select soxe from xe ORDER by soxe';
	$result = mysqli_query($db,$sql);
	while ($row = mysqli_fetch_array($result)){
		echo '<button class="btn btn-success" onclick="ChooseBus('.$row[0].')">'.$row[0].'</button>'."\n";
	}
?>