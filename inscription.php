<html>
    <head>
        <meta htptp-equiv="content-Type" content="text/html; charset=UTF-8" />
        <title>Inscription</title>
        <meta name="robots" content="noindex, nofollow">
    </head>
    <body>
        <?php
        $connexion = new PDO('mysql:host=localhost;dbname=filesrank;charset=utf8','root',''); 
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $reponse = $connexion->query('SELECT * FROM type_utilisateur ');
        $lesTypesUsers = $reponse->fetchAll();
        $connexion = null;
        ?>
        <form action="store_inscription.php" method="post">
            inscriver vos identifiant : <br>
            nom           ----> <input type="text" name="NomUser"/><br>
            prenom        ----> <input type="text" name="PrenomUser"/><br> 
            login         ----> <input type="text" name="LoginUser"/><br>
            mot de passe  ----> <input type="password" name="MDPUser"/><br> 
            Droit         ----> <select name="select_IdType">
                                    <?php
                                    for($i=0;$i<count($lesTypesUsers);$i++)
                                    {
                                    ?>  
                                        <option value="<?php echo $lesTypesUsers[$i]["IdType"]?>">
                                        <?php echo $lesTypesUsers[$i]["Description_Type_User"]?>      
                                        </option>
                                    <?php
                                    }
                                    ?> 
                                </select><br>
            <input type="submit" name="inscription" value="inscription">
        </form>
    </body>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                </p>
            </div>
        </div>
    </footer>
</html>