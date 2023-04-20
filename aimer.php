<?php
include_once "traitement.php";
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['like'])){
    $_SESSION=array();
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $produits=mysqli_query($con,"SELECT * FROM categorie WHERE id=$id");
    if(empty(mysqli_fetch_assoc($produits))){
        die("Ce produit n'existe pas");
    }
    if(isset($_SESSION['like'][$id])){
        $_SESSION['like'][$id]++;
    }else{
        $_SESSION['like'][$i]=1;
    }
    header("Location:index.php");
}
?>