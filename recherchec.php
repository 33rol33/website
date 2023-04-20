<?php
$bdd = new PDO('mysql:host=localhost;dbname=eco;','root','');

if(isset($_GET['s']) && !empty($_GET['s'])){
    $recherche = htmlspecialchars($_GET['s']);
    $search = $bdd->query('SELECT * FROM categorie WHERE nom LIKE "%'.$recherche.'%" ORDER BY id DESC ');
     if($search->rowCount() == 0) {
      $search = $bdd->query('SELECT nom FROM categorie WHERE nom LIKE "%'.$recherche.'%" ORDER BY id DESC');
       }
}
?>

<form method="GET" action="recherchec.php">
                    <div class="input-group">
                        <input type="text" class="form-control" name="s" placeholder="Recherche par catégorie">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <button type="submit"  class="btn btn-secondary" type="button" style="background-color: #D19C97; border-color:#D19C97; ">
                                         <i class="fa fa-search"></i>
                                      </button>
                            </span>
                        </div>
                    </div>
</form>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <section class="recherche">


          

<?php if(isset($search) AND $search->rowCount() > 0) { ?>
   
   <?php while($a = $search->fetch()) { ?>
      
    
<div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/<?= $a["image"]  ?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?= $a["produit"]  ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?= $a["prix"]  ?> FCFA</h6><h6 class="text-muted ml-2"><del><?= $a["prixnorm"]  ?> FCFA</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="voirlesdétails.php?id=<?= $a["id"] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir les détails</a>
                        <a href="ajouter_panier.php?id=<?= $a['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter au panier</a>
                    </div>
                </div>
            </div>
        </div>
</div>


   <?php } ?>
   
<?php } elseif(isset($search) AND $search->rowCount() == 0) { ?>
Aucun résultat pour...
<?php } ?>

</section>


<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

