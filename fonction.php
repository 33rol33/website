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


$sql = "SELECT * FROM autre WHERE id_autre=12 OR id_autre=13 ";
    $stmt = $pdo->prepare($sql);
     $stmt->execute();
    
    
$asql = "SELECT * FROM autre ";
    $astmt = $pdo->prepare($asql);
     $astmt->execute();
   
$csql = "SELECT * FROM categorie ";
    $cstmt = $pdo->prepare($csql);
     $cstmt->execute();

        
$psql = "SELECT * FROM categorie WHERE id = 1 OR id = 2 ";
$pstmt = $pdo->prepare($psql);
 $pstmt->execute();


 $pssql = "SELECT * FROM categorie WHERE id = 13 OR id = 15 OR id = 19 OR id =20  ";
$psstmt = $pdo->prepare($pssql);
 $psstmt->execute();

 $shsql = "SELECT * FROM categorie  ORDER BY id DESC ";
 $shstmt = $pdo->prepare($shsql);
  $shstmt->execute();

  $shdsql = "SELECT * FROM categorie ORDER BY id DESC ";
  $shdstmt = $pdo->prepare($shdsql);
   $shdstmt->execute();

   $pd1sql = "SELECT * FROM categorie Where nom='Robes pour femmes' OR nom='Robes pour enfants' OR nom='Chemises' OR nom='Jeans' ";
   $pd1stmt = $pdo->prepare($pd1sql);
    $pd1stmt->execute();
 

    $pd2sql = "SELECT * FROM categorie Where nom='Maillots de bain' OR nom='Vêtements de nuit' OR nom='Tenue de sport' OR nom='Combinaison' ";
    $pd2stmt = $pdo->prepare($pd2sql);
     $pd2stmt->execute();

$pd3sql = "SELECT * FROM categorie Where nom='  Blazer' OR nom='Vestes' OR nom='Chaussures' ";
     $pd3stmt = $pdo->prepare($pd3sql);
      $pd3stmt->execute();

 $dsql = "SELECT * FROM categorie WHERE trie='derniere' ";
      $dstmt = $pdo->prepare($dsql);
       $dstmt->execute();

$psql = "SELECT * FROM categorie WHERE trie='populaire' ";
       $pstmt = $pdo->prepare($psql);
        $pstmt->execute();

 $msql = "SELECT * FROM categorie WHERE trie='meilleure' ";
        $mstmt = $pdo->prepare($msql);
         $mstmt->execute();

?>
