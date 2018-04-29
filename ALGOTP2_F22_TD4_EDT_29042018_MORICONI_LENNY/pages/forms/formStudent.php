<h3>AJOUTER UN ELEVE</h3>

	<div class="container">
		<form id="fStudent" name="formStudent" method="request" action="#">
			<?php
				require_once "pages/selects/selectClass.php";
				require_once "pages/selects/selectGroup.php";
			?>
			<label>Last Name</label>
				<input type="text" id="lName" name="lastname" placeholder="Last Name" onchange="createMail()" required autofocus>
			<label>First Name</label>
				<input type="text" id="fName" name="firstname" placeholder="Fisrt Name" onchange="createMail()" required>
			<label>Mail</label>
				<input type="email" id="sMail" name="studentMail" placeholder="" readonly required><br>
			<input type="submit" id="subBtn" value="Envoyer">
		</form>
	</div>

	<?php
		require_once "pages/requests/addStudent.php";
	?>