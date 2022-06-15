<?php
	include 'server.php';

	if(!isset($_SESSION['user_name'])) {
   		header('location: authentication.php');
	}
?>

<!--<!DOCTYPE html>-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>
			watermelon !
		</title>
			<link rel="icon" href="media/images/w2_ico.ico">
		<!--
		<link type="text/css" rel="stylesheet" href="common.css">
		<link type="text/css" rel="stylesheet" href="authentication.css">
		-->
		<link type="text/css" rel="stylesheet" href="style.css">
		<link type="text/css" rel="stylesheet" href="s_home.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			let resources = 1;
		</script>
	</head>
	<body>
		<div id = "container">
		</div>

		<script src="main.js"></script>
		<script src="menus.js"></script>
		<script src="messages.js"></script>
		<script src="privacy.js"></script>
	</body>
</html>
