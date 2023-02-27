 <div class="container">
     <div class="row">
         <div class="col d-flex justify-content-between">
             <h2>Mes annonces</h2>
             <div>
                 <a href="/new" class="btn btn-success">Ajouter une annonce</a>
             </div>
         </div>
     </div>

     <div class="row py-4">
         <?php foreach ($announcements as $announcement) : ?>
             <div class="col-lg-3 mb-5">
                 <?php require_with('includes/_item.php', ['announcement' => $announcement, 'ud' => true]) ?>
             </div>
         <?php endforeach; ?>

     </div>
 </div>