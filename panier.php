<?php
include("fonction.php");
session_start();

if (!isset($_SESSION["login"])) {
  
  header("Location:connexion.php");
}

include_once "traitement.php";
//supprimer le produit
//si la variable existe
if(isset($_GET['del'])){
    $id_del = $_GET['del'];
    //suppression
    unset($_SESSION['panier'][$id_del]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EShopper - Bootstrap Shop Template</title>
    <link rel="stylesheet" href="stylep.css">
</head>
<body class="panier">
    <a href="index.php" class="link">Boutique</a>
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
            $total= 0;
            //liste des produits
            //récupérer les clés du tableau session
            $ids= array_keys($_SESSION['panier']);
            //s'il n'y aucune clé dans le tableau
            if(empty($ids)){
                echo"Votre panier est vide";
            }else{
                //si oui
              $produit= mysqli_query($con,"SELECT * FROM categorie WHERE id IN (".implode(',', $ids).")");
              //liste des produits avec une boucle foreach
              foreach($produit as $product){ 
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
            <?php } } ?>
            <tr class="total">
                <th>Total : <?= $total ?>$</th>
            </tr>
        </table>
    </section>
</body>
</html>