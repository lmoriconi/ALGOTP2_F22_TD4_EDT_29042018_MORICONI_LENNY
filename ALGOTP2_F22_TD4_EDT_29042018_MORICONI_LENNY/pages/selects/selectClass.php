<label>Class</label>
	<select id="sClass" name="selectClass">
		<?php
			$class = "SELECT DISTINCT LIBELLE_CLA FROM CLASSE ORDER BY LIBELLE_CLA ASC";
			foreach($connexion->query($class) as $row)
				echo "<option>".$row['LIBELLE_CLA']."</option>\n\t\t\t\t";
		?>
	</select>