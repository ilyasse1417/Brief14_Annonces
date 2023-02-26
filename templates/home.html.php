<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4">
            <h2>Liste des annonces</h2>
        </div>
    </div>
    <div class="row py-4">
        <?php foreach ($announcements as $announcement) : ?>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="/uploads/<?php echo $announcement['file_name'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $announcement['title'] ?></h5>
                        <div class="card-text">
                            <ul>
                                <li> <strong>Catégorie</strong> <?php echo $announcement['category'] ?></li>
                                <li> <strong>type</strong> <?php echo $announcement['type'] ?></li>
                                <li> <strong>Superficie</strong> <?php echo $announcement['superficie'] ?></li>
                                <li> <strong>Prix</strong> <?php echo $announcement['price'] ?></li>
                                <li> <strong>Adresse</strong>
                                    <?php echo $announcement['address'] ?>
                                    <?php echo $announcement['city'] ?>
                                    <?php echo $announcement['postal_code'] ?>
                                </li>
                            </ul>
                        </div>
                        <a href="/details/?id=<?php echo $announcement['id'] ?>" class="btn btn-primary">Voir plus de détail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>