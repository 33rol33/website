<?php include("fonction.php") ?>
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
<link rel="stylesheet" href="styl.css">
<body>
    <?php include("topbar.php") ?>
    <!-- Navbar Start -->
    <?php include("navbar.php") ?>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <?php include("pagev.php") ?>
    <!-- Page Header End -->
    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
    <?php
          /* Attempt MySQL server connection. Assuming you are running MySQL
          server with default setting (user 'root' with no password) */
             try {
             $pdo = new PDO("mysql:host=localhost;dbname=eco", "root", "");
           // Set the PDO error mode to exception
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 } catch (PDOException $e) {
              die("ERROR: Could not connect. " . $e->getMessage());
            }
            if(isset($_GET['id']))
                  {

                     $idselect=$_GET['id'];
                     $csql = "SELECT * FROM categorie WHERE id=:id";
                     $cstmt = $pdo->prepare($csql);
    
                     // Bind parameters to statement
                     $cstmt->bindParam(':id', $idselect, PDO::PARAM_STR);
          
                      $cstmt->execute();

                     $result = $cstmt->fetchall();
        
                     foreach ($result as $categorie)  { ?>
                      <div class="row px-xl-5">
                      <div class="col-lg-5 pb-5">
                          <div id="product-carousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner border">
                                  <div class="carousel-item active">
                                      <img class="w-100 h-100" src="img/<?= $categorie["image"] ?>" alt="Image">
                                  </div>
                              </div>
                              <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                                  <i class="fa fa-2x fa-angle-left text-dark"></i>
                              </a>
                              <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                                  <i class="fa fa-2x fa-angle-right text-dark"></i>
                              </a>
                          </div>
                      </div>
          
                      <div class="col-lg-7 pb-5">
                          <h3 class="font-weight-semi-bold"><?= $categorie["produit"] ?></h3>
                          <div class="d-flex mb-3">
                          </div>
                          <h3 class="font-weight-semi-bold mb-4"><?= $categorie["prix"] ?> FCFA</h3>
                          <p class="mb-4"><?= $categorie["texte"] ?>.</p>
                          <div class="d-flex mb-3">
                              <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                              <form>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="size-1" name="size">
                                      <label class="custom-control-label" for="size-1"><?= $categorie["size1"] ?></label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="size-2" name="size">
                                      <label class="custom-control-label" for="size-2"><?= $categorie["size2"] ?></label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="size-3" name="size">
                                      <label class="custom-control-label" for="size-3"><?= $categorie["size3"] ?></label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="size-4" name="size">
                                      <label class="custom-control-label" for="size-4"><?= $categorie["size4"] ?></label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="size-5" name="size">
                                      <label class="custom-control-label" for="size-5"><?= $categorie["size5"] ?></label>
                                  </div>
                              </form>
                          </div>
                          <div class="d-flex mb-4">
                              <p class="text-dark font-weight-medium mb-0 mr-3">Couleurs:</p>
                              <form>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="color-1" name="color">
                                      <label class="custom-control-label" for="color-1"><?= $categorie["color1"] ?></label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="color-2" name="color">
                                      <label class="custom-control-label" for="color-2"><?= $categorie["color2"] ?></label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="color-3" name="color">
                                      <label class="custom-control-label" for="color-3"><?= $categorie["color3"] ?></label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="color-4" name="color">
                                      <label class="custom-control-label" for="color-4"><?= $categorie["color4"] ?></label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" class="custom-control-input" id="color-5" name="color">
                                      <label class="custom-control-label" for="color-5"><?= $categorie["color5"] ?></label>
                                  </div>
                              </form>
                          </div>
                          <div class="d-flex align-items-center mb-4 pt-2">
                              <div class="input-group quantity mr-3" style="width: 130px;">
                                  <div class="input-group-btn">
                                      <button class="btn btn-primary btn-minus">
                                      <i class="fa fa-minus"></i>
                                      </button>
                                  </div>
                                  <input type="text" class="form-control bg-secondary text-center" value="1">
                                  <div class="input-group-btn">
                                      <button class="btn btn-primary btn-plus">
                                          <i class="fa fa-plus"></i>
                                      </button>
                                  </div>
                              </div>
                              <button class="btn btn-primary px-3"><a href="ajouter_panier.php?id=<?= $categorie['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fa fa-shopping-cart mr-1"></i> Ajouter au panier</a></button>
                             <button class="btn btn-primary px-3"><a href="commande.php" class="btn btn-sm text-dark p-0">Message</a></button>

                          </div>
                          <div class="d-flex pt-2">
                              <p class="text-dark font-weight-medium mb-0 mr-2">Partager sur:</p>
                              <div class="d-inline-flex">
                                  <a class="text-dark px-2" href="https://www.facebook.com/profile.php?id=100088700515225">
                                      <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a class="text-dark px-2" href="https://www.linkedin.com/in/roland-akpah-b7419b267/">
                                      <i class="fab fa-linkedin-in"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row px-xl-5">
                      <div class="col">
                          <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                              <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                              <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Information</a>
                          </div>
                          <div class="tab-content">
                              <div class="tab-pane fade show active" id="tab-pane-1">
                                  <h4 class="mb-3">Description du produit</h4>
                                  <p><?= $categorie["texte"] ?>.</p>
                                  <p><?= $categorie["texte"] ?>.</p>
                              </div>
                              <div class="tab-pane fade" id="tab-pane-2">
                                  <h4 class="mb-3">Informations complémentaires</h4>
                                  <p><?= $categorie["texte"] ?>.</p>
                                 
                              </div>
                          </div>
                      </div>
                  </div>
                     <?php } 
                     }
                     ?>
                      </div>
    <!-- Shop Detail End -->
    <!-- Products Start -->
    <?php include("productd.php") ?>
    <!-- Products End -->
    <!-- Footer Start -->
    <?php  include("footer.php") ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


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


