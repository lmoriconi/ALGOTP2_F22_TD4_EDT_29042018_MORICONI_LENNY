<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<title>Index</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<?php
			require_once "pages/connect.php";
			
			$connexion = connect_bd();

			require_once "pages/forms/formStudent.php";
		?>

		<?php
			require_once "pages/links.php";
		?>

		<script src="scripts/createMail.js" type="text/javascript"></script>
	</body>
</html>