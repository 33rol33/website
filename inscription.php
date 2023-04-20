<?php
include("fonction.php");

if(isset($_POST["envoi"])){ 
        if (!empty($_POST["nom"]) && !empty($_POST["nom"]) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST["dates"]) && !empty($_POST["sexe"]))
           {
              $nom=$_POST["nom"];
              $prenom=$_POST["prenom"];
               $email=$_POST['email'];
              $mdp= $_POST['mdp'];
              $dates=$_POST["dates"];
              $sexe=$_POST["sexe"];
             $sql = "INSERT INTO user (nom ,prenom ,email, mdp,dates,sexe) VALUES (:nom, :prenom , :email, :mdp ,:dates, :sexe)";
              $stmt = $pdo->prepare($sql);
              // Bind parameters to statement
              $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
              $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
             $stmt->bindParam(':email', $email, PDO::PARAM_STR);
              $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
              $stmt->bindParam(':dates', $dates, PDO::PARAM_STR);
              $stmt->bindParam(':sexe', $sexe, PDO::PARAM_STR);
              $stmt->execute();
             header("Location:connexion.php");
            }
                         }
?>

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
        <h1>Inscription</h1>
        <div class="social-media">
            <p><i class="fab fa-google"></i></p>
            <p><i class="fab fa-instagram"></i></p>
            <p><i class="fab fa-twitter"></i></p>
            <p><i class="fab fa-facebook"></i></p>
        </div>
        <div class="inputs">
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="mdp" placeholder="Mot de passe">
            <input type="date" name="dates" min="1969-01-01" max="2013-12-31">
        </div>
        <div class="selects">
            <select name="sexe">
                <option>F</option>
                <option>M</option>
            </select>
        </div>
        <div align="center">
            <button type="submit" name="envoi">S'inscrire</button>
        </div>
    </form>
</body>
</html>