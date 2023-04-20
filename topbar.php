<?php
session_start();
if (!isset($_SESSION['panier'])){
    $_SESSION['panier']=array();
}
?>
<div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="https://www.facebook.com/profile.php?id=100088700515225">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="https://www.linkedin.com/in/roland-akpah-b7419b267/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                     <a class="text-dark px-2" href="https://www.pinterest.fr/rakpah/">
                        <i class="fab fa-pinterest"></i>
                    </a>
                     <a class="text-dark px-2" href="https://www.instagram.com/rolandakpah/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Acheteur</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
               <?php include("recherchec.php") ?>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="panier.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge"><?= array_sum($_SESSION['panier']) ?></span>
                </a>
            </div>
        </div>
    </div>