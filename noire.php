<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="submit" name="noire" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Noire</label>
                       
</div>

<?php
include('fonction.php');

if(isset($_POST["noire"])){
    $noire=$_POST["noire"];
$nsql = "SELECT * FROM categorie WHERE couleur='noir' ";
      $nstmt = $pdo->prepare($nsql);
       $nstmt->execute();
        
    while($noir=$nstmt->fetch()) 
    {
      echo"<img class='noir' src='img/". $noir['image']." ' >";
      echo "<br>";
      echo "<br>";
    }
    }
?>
</body>
</html>
