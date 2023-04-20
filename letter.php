<div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="nom" class="form-control border-0 py-4" placeholder="Votre nom" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control border-0 py-4" placeholder="Votre email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Abonnez-vous maintenant</button>
                            </div>
                        </form>
</div>

<?php
include("fonction.php");

if (isset($_POST['nom']) && isset($_POST['email']))
{
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  
 $sql = "INSERT INTO abonne (nom, email) VALUES (:nom, :email)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      
    $stmt->execute();
    echo"Vous êtes déja abonné";

}

?>