<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../../css/style.css">
		<title>Ajouter un professeur</title>
		<meta charset="utf-8">
	</head>

	<body>

	<?php
		require_once "../connect.php";
		
		$connexion = connect_bd();
	?>

	<h3>AJOUTER UN ENSEIGNANT</h3>

	<div class="container">
		<form id="fProf" name="formProf" method="request" action="#">
			<label>Last Name</label>
				<input type="text" id="lName" name="lastname" placeholder="Last Name" onchange="createMail()" required autofocus>
			<label>First Name</label>
				<input type="text" id="fName" name="firstname" placeholder="Fisrt Name" onchange="createMail()" required>
			<label>Mail</label>
				<input type="email" id="sMail" name="profMail" readonly required><br>
			<input type="submit" id="subBtn" value="Envoyer">
		</form>
	</div>

	<?php
		require_once "../requests/addProf.php";
	?>

	<?php 
		require_once "../links.php";
	?>

	<script src="../../scripts/createMail.js" type="text/javascript"></script>

	</body>
</html>