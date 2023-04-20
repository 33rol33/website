<?php
$bdd = new PDO('mysql:host=localhost;dbname=eco;', 'root','');
$search= $bdd->query('SELECT * FROM categorie ORDER BY id DESC');
if(isset($_GET['s']) && !empty($_GET['s'])){
    $recherche = htmlspecialchars($_GET['s']);
    $search = $bdd->query('SELECT nom FROM categorie WHERE nom LIKE "%'.$recherche.'%" ORDER BY id DESC ');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="search" name="s" placeholder="Rechercher" autocomplete="off">
        <input type="submit" name="envoyer">
    </form>
    <section class="recherche">
          <?php
        //   var_dump($search);

          if($search->rowCount()>0){
               while($re=$search->fetch()){
                ?>
                <p><?= $re['nom']; ?></p>
                <?php
               }
          }else{
            ?>
            <p>Aucune catégorie trouvé </p>
            <?php
          }
          ?>
    </section>
</body>
</html>