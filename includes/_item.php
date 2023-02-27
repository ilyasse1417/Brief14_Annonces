<div class="card">
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
            <div class="text-center">
                <a href="/details/?id=<?php echo $announcement['id'] ?>" class="btn btn-outline-success">Voir plus de détails</a>
            </div>
        </div>
    </div>
    <?php if (isset($ud)) : ?>
        <div class="card-footer d-flex justify-content-between">
            <a href="/edit/?id=<?php echo $announcement['id'] ?>">Modifier</a>
            <a href="/delete/?id=<?php echo $announcement['id'] ?>" class="js-link-confirm">Supprimer</a>
        </div>
    <?php endif; ?>
</div>