<!DOCTYPE html>
hello word test 
<html>
    <head>
    <meta htptp-equiv="content-Type" content="text/html; charset=UTF-8" />
    <title>Inscription</title>
   <meta name="robots" content="noindex, nofollow">
    </head>

    <body>
    inscriver vos identifiant : <br/>
    <form action="index.php" method="post">
    login ----> <input type="text" name="LoginUser" value=""><br/>
    mot de passe  ----> <input type="password" name="MDPUser" value=""><br/>

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
        <?php 
        $pass_ache = password_hash($_POST['MDPUser'], PASSWORD_DEFAULT);


        $req = $bdd->prepare('INSERT INTO utilisateur(LoginUser, MDPUser) VALUES(:LoginUser, :MDPUser, CURDATE())');
        $req->execute(array(
            'LoginUser' => $LoginUser,
            'MDPUser' => $MDPUser));
            ?>
</html>