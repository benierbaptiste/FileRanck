<body>
<?php
try
{
$connexion = new PDO('mysql:host=localhost;dbname=filranck;charset=utf8', 'root', '');
$reponse = $connexion->query("SELECT * FROM theme");
$lesThemes = $reponse->fetchAll();
$connexion = NULL; 
}
    catch (PDOException $e)

	{
		include "views/404.php";
	}
    ?>
    <?php
    $str = $lesThemes[$i]["description"];
    ?>
        <table>
            <tr>
                <td><?php echo $lesThemes[$i]["NomTheme"]?></td>
                <td><?php echo $lesThemes[$i]["libelle"]?></td>
                <td><?php
                if (strlen($str)>20)
                {
                    $taille = strlen($str) - 20;
                    echo $rest = substr($str, 0,-$taille); ?></td>
                <?php
                }
                else
                {
                    echo $lesThemes[$i]["description"]?> </td>
                <?php
                }
                for ($i=0; $i<count($lesThemes); $i++)
                {
            
                ?>
                
            </tr>
            </table>
        
        
</body>