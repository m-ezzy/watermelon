<?php
	require 'server.php';

	$EM = $_REQUEST['q'];
	
	$u = $_SESSION['user_name'];
	$u2 = $_SESSION['current']['chat'];

	$row_number = $_SESSION['row_number'];
	$row_number += 1;
	$_SESSION['row_number'] = $row_number;

	$first = $u < $u2 ? $u : $u2;
	$second = $u < $u2 ? $u2 : $u;

	$query = "INSERT INTO chat_between_$first" . "_$second (ROWNUM,sent_by,message) VALUES (" . $row_number . ",'" . $u . "','" . $EM . "')";

	if ($conn->query($query)) {
		echo "1 success";
	}

	/*
	echo "<div class='MessagesSent'>";
	echo $m;
	echo "</div>";
	*/
?>
