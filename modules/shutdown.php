<?php
	switch ($_GET['action']) {
		case '0':
				restart();
			break;

		case '1':
				shutdown();
			break;

		default:
			header('Location: ../index.php');
			break;
	}

	function restart(){

			?>
				<!DOCTYPE html>
				<html>
					<head>
						<meta charset="utf-8">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
						<meta http-equiv="refresh" content="45; URL=../index.php">
						<title>Raspberry Pi Control Panel - Neustart</title>
						<link rel="stylesheet" href="../stylesheets/main.css">
					</head>

					<body>
						<div id="container">
							<img id="logo" src="../images/raspberry.png">
							<div id="title">Raspberry Pi Control Panel</div>
							<p class="action">Das System wird nun neu gestartet...</p>
							<img id="loader" src="../images/reboot.gif">
						</div>
					</body>
				</html>
			<?php

			system('sudo /sbin/shutdown -r now');

	}

	function shutdown(){
			?>
				<!DOCTYPE html>
				<html>
					<head>
						<meta charset="utf-8">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
						<meta http-equiv="refresh" content="10; URL=../index.php">
						<title>Raspberry Pi Control Panel - Neustart</title>
						<link rel="stylesheet" href="../stylesheets/main.css">
					</head>

					<body>
						<div id="container">
							<img id="logo" src="../images/raspberry.png">
							<div id="title">Raspberry Pi Control Panel</div>
							<p class="action" STYLE="color: #FF0000;">Das System wird nun heruntergefahren...</p>
							<img id="loader" src="../images/shutdown.gif">
						</div>
					</body>
				</html>
			<?php

			system('sudo /sbin/shutdown -h now');
	}
?>