<!DOCTYPE html>
<html>
    
    <head>
        <?php 
            $req = $bdd->prepare('SELECT id, LoginUser FROM utilisateur WHERE LoginUser = :LoginUser');
            $req->execute(array(
                'LoginUser' => $LoginUser));
            $resultat = $req->fetch();  


            $isPasswordCorrect = password_verify($_POST['MDPUser'], $resultat['MDPUser']);

            if (!$resultat)
            {
                echo 'Mauvais identifiant ou mot de passe !';
            }
            else
            {
                if ($isPasswordCorrect) {
                    session_start();
                    $_SESSION['id'] = $resultat['id'];
                    $_SESSION['LoginUser'] = $LoginUser;
                    echo 'Vous êtes connecté !';
                }
                else {
                    echo 'Mauvais identifiant ou mot de passe !';
                }
            }
            ?>
    </head>
    <body>
    </body>
</html>
