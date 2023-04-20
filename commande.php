<?php
include_once "fonction.php";

if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["messages"])) {
  
    
    $nom= $_POST["nom"];
    $email= $_POST["email"];
    $messages= $_POST["messages"];

  


 $sql = "INSERT INTO commande (nom, email, messages) VALUES (:nom, :email, :messages)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':messages', $messages, PDO::PARAM_STR);
      
    $stmt->execute();

    echo" Votre message a été envoyé";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    ?>

          <button ><a href="index.php" > Retourner à la page d'accueil</a></button>
    <?php


    
} 

?>




<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>EShopper - Bootstrap Shop Template</title>
      <link rel="stylesheet" href="stylec.css">
      <link rel="stylesheet" href="styleli.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <input type="checkbox" id="click">
      <label for="click">
      <i class="fab fa-facebook-messenger"></i>
      <i class="fas fa-times"></i>
      </label>
      <div class="wrapper">
         <div class="head-text">
          Contactez le vendeur
         </div>
         <div class="chat-box">
            <form method="POST">
               <div class="field">
                  <input type="text" name="nom" placeholder="Votre nom" required>
               </div>
               <div class="field">
                  <input type="email" name="email" placeholder="Email Address" required>
               </div>
               <div class="field textarea">
                  <textarea cols="30" rows="10" name="messages" placeholder="Votre message.." required></textarea>
               </div>
               <div class="field">
                  <button type="submit">Envoyer</button>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>