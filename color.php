<div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filtrer par couleur</h5>
                    <form method="POST">
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">Toute les couleurs</label>
                        </div>
                        <?php include('blanche.php') ?>
                        <?php include('noire.php') ?>
                       <?php include('rouge.php') ?>
                       <?php include('bleue.php') ?>
                       <?php include('verte.php') ?>
                        
                    </form>
</div>