<body>
	<?php
		try
		{
			$connexion = new PDO('mysql:host=localhost;dbname=filranck;charset=utf8', 'root', '');
			$reponse = $connexion->query("SELECT * FROM theme ");
			$lesTheme = $reponse->fetch(); 
		}
    	catch (PDOException $e)
		{
			include "views/404.php";
		}
		for($i=0; $i<count($lesTheme); $i++)?>
		<table>
			<tr>
			Titre Description 
				<td>
					<?php
					echo $lesTheme['NomTheme'].' | ';
					echo $lesTheme['DescriptionTheme'].' | ';
					?>
				</td>
			</tr>
		</table>
		<?php $connexion = NULL; ?>    
</body>