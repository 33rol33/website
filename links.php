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

<?php
include_once "fonction.php";
include_once "topbar.php";
include_once "navbar.php";
include_once "featured.php";
if(isset($_GET['id']))
{

$idselect=$_GET['id'];
$sql = "SELECT * FROM autre WHERE id_autre=:id";
$stmt = $pdo->prepare($sql);

// Bind parameters to statement
$stmt->bindParam(':id', $idselect, PDO::PARAM_STR);
      
$stmt->execute();

$result = $stmt->fetchall();
 
    if (!isset($result)){ 
        header('location: index.php');
    }
}

$sql = "SELECT * FROM categorie WHERE id_autre= $idselect";
    $stmt = $pdo->prepare($sql);
   
    $stmt->execute();

    $result = $stmt->fetchall();

foreach($result as $value){ ?>

     <div class="container-fluid pt-5">
     <div class="row px-xl-5 pb-3"> 
             <div class="col-lg-4 col-md-6 pb-1">
                   <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                       <p class="text-right"><?= $value["nombredeproduit"]  ?> Produits</p>
                       <a href="voirlesdétails.php?id=<?= $value["id"] ?>" class="cat-img position-relative overflow-hidden mb-3">
                          <img class="img-fluid" src="img/<?= $value["image"]  ?>" alt="">
                       </a>
                      <h5 class="font-weight-semi-bold m-0"><?= $value["nom"]  ?></h5>
                  </div>
             </div>   
     </div>
</div>
 <?php } ?>

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