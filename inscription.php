<!DOCTYPE html>
<<<<<<< HEAD
=======

>>>>>>> 1eae5d71e9759a7c64e363f3d100e01f29378a7b
<html>
    <head>
    <meta htptp-equiv="content-Type" content="text/html; charset=UTF-8" />
    <title>Inscription</title>
    <meta name="robots" content="noindex, nofollow">
    </head>
    <body>
    <form action="store_inscription.php" method="post">
    inscriver vos identifiant : <br/>
    nom           ----> <input type="text" name="NomUser"/><br>
    prenom        ----> <input type="text" name="PrenomUser"/><br> 
    login         ----> <input type="text" name="LoginUser"/><br>
    mot de passe  ----> <input type="password" name="MDPUser"/><br>
    <input type="submit" name="inscription" value="inscription">
    </form>
    </body>
    <footer class="footer text-center">
            <div class="container">
<<<<<<< HEAD
                <div class="row">
                 </p>
                </div>
            </div>
    </footer>
=======
                <div class="row">               
                        </p>
                </div>
            </div>
        </footer>
        <?php 
        
        $connexion = new PDO("mysql=host=localhost;dbname=filesrank;charset=utf8","root","");

        $req = $bdd->prepare("INSERT INTO utilisateur(LoginUser,MDPUser) VALUES(:LoginUser, :MDPUser, CURDATE())");
        $pass_ache = password_hash($_POST["MDPUser"], PASSWORD_DEFAULT);
        $req->execute(array(
            "LoginUser" => $LoginUser,
            "MDPUser" => $MDPUser));
            ?>
>>>>>>> 1eae5d71e9759a7c64e363f3d100e01f29378a7b
</html>
