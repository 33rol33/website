<div class="container-fluid pt-5">
     <div class="row px-xl-5 pb-3">
         <?php while ($categorie=$cstmt->fetch()) {  ?>  
             <div class="col-lg-4 col-md-6 pb-1">
                   <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                       <p class="text-right"><?= $categorie["nombredeproduit"]  ?> Produits</p>
                       <a href="voirlesdétails.php?id=<?= $categorie["id"] ?>" class="cat-img position-relative overflow-hidden mb-3">
                          <img class="img-fluid" src="img/<?= $categorie["image"]  ?>" alt="">
                       </a>
                      <h5 class="font-weight-semi-bold m-0"><?= $categorie["nom"]  ?></h5>
                  </div>
             </div>   
         <?php } ?> 
     </div>
</div>