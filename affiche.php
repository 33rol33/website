<?php
include_once "fonction.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EShopper - Bootstrap Shop Template</title>
    <link rel="stylesheet" href="stylea.css">
</head>
<body>
    <a class="link" href="index.php">Accueil</a>
    <section>
           <table>
                 <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Message</th>
                 </tr>
                <?php 
                $sql = "SELECT * FROM commande ";
                   $stmt = $pdo->prepare($sql);
          
                  $stmt->execute();

                   $result = $stmt->fetchall();
                 foreach ($result as $value) {?>
                 <tr>
                    <td><?= $value["nom"] ?></td>
                    <td><?= $value["email"] ?></td>
                    <td><?= $value["messages"] ?></td>
                 </tr>
                 <?php } ?>
           </table>
    </section>
</body>
</html>