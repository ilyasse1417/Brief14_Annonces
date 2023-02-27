<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="bg-light  p-3 border">
                <form action="/home/" method="GET">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="form-label" for="form2Example1">Ville</label>
                            <input type="text" name="city" id="city" class="form-control" value="<?php echo $_GET['city'] ?? '' ?>" />
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label" for="form2Example1">Prix min</label>
                            <input type="number" name="price_min" id="price_min" class="form-control" value="<?php echo $_GET['price_min'] ?? '' ?>" />
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label" for="form2Example1">Prix max</label>
                            <input type="number" name="price_max" id="price_max" class="form-control" value="<?php echo $_GET['price_max'] ?? '' ?>" />
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label" for="form2Example1">Catégorie</label>
                            <?php $category =  $_GET['category'] ?? null; ?>
                            <select name="category" class="form-select">
                                <option value=""> -- </option>
                                <option value="Vente" <?php echo $category == 'Vente' ? 'selected' : '' ?>>Vente</option>
                                <option value="Location" <?php echo $category == 'Location' ? 'selected' : '' ?>>Location</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label" for="form2Example1">Type</label>
                            <?php $type = $_GET['type'] ?? null; ?>
                            <select name="type" class="form-select">
                                <option value=""> -- </option>
                                <option value="Appartement" <?php echo $type == 'Appartement' ? 'selected' : '' ?>>Appartement</option>
                                <option value="Maison" <?php echo $type == 'Maison' ? 'selected' : '' ?>>Maison</option>
                                <option value="Villa" <?php echo $type == 'Villa' ? 'selected' : '' ?>>Villa</option>
                                <option value="Bureau" <?php echo $type == 'Bureau' ? 'selected' : '' ?>>Bureau</option>
                                <option value="Terrain" <?php echo $type == 'Terrain' ? 'selected' : '' ?>>Terrain</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <?php $trier_par = $_GET['trier_par'] ?? null; ?>
                            <label class="form-label" for="form2Example1">Trier</label>
                            <select name="trier_par" class="form-select">
                                <option value=""> -- </option>
                                <option value="created_at ASC" <?php echo $trier_par == 'created_at ASC' ? 'selected' : '' ?>>Date croissant</option>
                                <option value="created_at DESC" <?php echo $trier_par == 'created_at DESC' ? 'selected' : '' ?>>Date décroissant</option>
                                <option value="price ASC" <?php echo $trier_par == 'price ASC' ? 'selected' : '' ?>>Prix croissant</option>
                                <option value="price DESC" <?php echo $trier_par == 'price DESC' ? 'selected' : '' ?>>Prix décroissant</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-end">
                            <div class="py-3">
                                <button type="submit" name="search" class="btn btn-primary me-2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    Rechercher
                                </button>
                                <button type="submit" name="reset" class="btn btn-info">
                                    <i class="fa-solid fa-rotate-right"></i>
                                    Réinitialiser
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-4">
            <h2>Liste d'annonces</h2>
        </div>
    </div>
    <div class="row py-4">
        <?php foreach ($announcements as $announcement) : ?>
            <div class="col-lg-3 mb-5">
                <?php require_with('includes/_item.php', ['announcement' => $announcement]) ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>