<?php
//inclure la page de connexion
include_once "traitement.php";
//vérifier si une session existe
if(!isset($_SESSION)){
    //si non démarer la session
    session_start();
}
//creer la session
if(!isset($_SESSION['panier'])){
    //s'il existe une session on une et on met un tableau à l'intérieur
    $_SESSION['panier']= array();
}
//récupération de l'id dans le lien
if(isset($_GET['id'])){//si un id a été envoyé alors
     $id=$_GET['id'];
     //vérifie grace à l'id si le produit existe dans la base de données
     $produit= mysqli_query($con, "SELECT * FROM categorie WHERE id=$id");
     if(empty(mysqli_fetch_assoc($produit))){//si ce produit n'existe pas
        die("Ce produit n'existe pas");
     }
     //ajouter le produit dans le panier (le tableau)
     if(isset($_SESSION['panier'][$id])){//si le produit est déjà dans le panier 
        $_SESSION['panier'][$id]++; //représente la quantité
     }else{
        //si non on ajoute le produit
        $_SESSION['panier'][$id]=1;
     }
     //redirection vers la page index.php
     header("Location:index.php");
}

?>