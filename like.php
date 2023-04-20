<?php
session_start();

include_once "traitement.php";

if(isset($_GET['del'])){
    $id_del = $_GET['del'];
    //suppression
    unset($_SESSION['like'][$id_del]);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EShopper - Bootstrap Shop Template</title>
    <link rel="stylesheet" href="stylel.css">
</head>
<body class="like">
     <a href="index.php" class="lien">Boutique</a>
     <section>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
             <?php 
        
            $ids= array_keys($_SESSION['like']);
            //s'il n'y aucune clé dans le tableau
            if(empty($ids)){
                echo"Votre panier est vide";
            }else{
                //si oui
              $produit= mysqli_query($con,"SELECT * FROM categorie WHERE id IN (".implode(',', $ids).")");
              //liste des produits avec une boucle foreach
              foreach($produit as $product)
              //calculer le total (prix unitaire * quantité)
              //et additionner chaque resultats à chaque tours boucle
              $total = $total + $product['prix'] * $_SESSION['panier'][$product['id']];
            ?>
                  <tr>
                        <td><img src="img/<?= $product['image'] ?>" ></td>
                        <td><?= $product['nom'] ?></td>
                         <td><?= $product['prix'] ?>FCFA</td>
                        <td><?= $_SESSION['panier'][$product['id']] //Quantité ?></td>
                       <td><a href="panier.php?del=<?= $product['id'] ?>"><img src="delete.png" ></a></td>
                 </tr>
            <?php } ?>
        </table>
     </section>
</body>
</html>