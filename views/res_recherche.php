<table>
<tr>
	<th>id</th>
	<th>libelle</th>
	

</tr>
<?php 
foreach($res as $ligne)
{
	?>
	<tr>
	<td><?php echo $ligne["IdMotCle"]?></td>
	<td><?php echo $ligne["NomMC"]?></td>


	</tr>
<?php
} 
?>
	
	


</table>