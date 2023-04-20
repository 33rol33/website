<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EShopper - Bootstrap Shop Template</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
    <form action="" method="POST">
        <h1>Se connecter</h1>
        <div class="social-media">
            <p><i class="fab fa-google"></i></p>
            <p><i class="fab fa-instagram"></i></p>
            <p><i class="fab fa-twitter"></i></p>
            <p><i class="fab fa-facebook"></i></p>
        </div>
        <p class="choose-email">ou utiliser mon adresse e-mail :</p>
        <div class="inputs">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="mdp" placeholder="Mot de passe">
        </div>
        <div align="center">
            <button type="submit">Se connecter</button>
        </div>
         <p class="inscription"><button><a class="register" href="inscription.php">Je n'ai pas de compte. Je m'en crée un.</a></button> </p>  
    </form>
</body>
</html>

<?php
include("fonction.php");
// var_dump($_POST['email']);die();


if (isset($_POST['email']) && isset($_POST['mdp']))
{
  $email=$_POST['email'];
  $mdp=$_POST['mdp'];

	$sql = "SELECT * FROM user WHERE email=:email AND mdp=:mdp";
    $stmt = $pdo->prepare($sql);
          // Bind parameters to statement
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);

    $stmt->execute();

    $result = $stmt->fetchall();
    $nombre= count($result);

    if ($nombre>0) {
    
    session_start();
    $_SESSION["login"]=1;

    header("Location: index.php");
    }

    else { echo "Votre adresse email ou mot de passe est incorrect";
    }
}


?>