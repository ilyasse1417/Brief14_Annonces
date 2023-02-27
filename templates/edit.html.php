<form action="/edit/?id=<?php echo $announcement['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col pb-3">
                <h2>Modifier l'annonce</h2>
            </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-outline mb-2">
                    <label class="form-label" for="title">Titre</label>
                    <input type="text" name="title" id="title" class="form-control" required value="<?php echo $announcement['title'] ?? '' ?>" />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="price">Prix</label>
                    <input type="number" name="price" id="price" class="form-control" required value="<?php echo $announcement['price'] ?? '' ?>" />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="superficie">Superficie (m<sup>2</sup>)</label>
                    <input type="number" name="superficie" id="superficie" class="form-control" required value="<?php echo $announcement['superficie'] ?? '' ?>" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-outline mb-2">
                    <label class="form-label" for="city">Ville</label>
                    <input type="text" name="city" id="city" class="form-control" required value="<?php echo $announcement['city'] ?? '' ?>" />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="address">Adresse</label>
                    <input type="text" name="address" id="address" class="form-control" required value="<?php echo $announcement['address'] ?? '' ?>" />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="postal_code">Code postal</label>
                    <input type="text" name="postal_code" id="postal_code" class="form-control" required value="<?php echo $announcement['postal_code'] ?? '' ?>" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-outline mb-2">
                    <label class="form-label" for="category">Catégorie</label>
                    <?php $category =  $announcement['category'] ?? null; ?>
                    <select name="category" class="form-select">
                        <option value=""> -- </option>
                        <option value="Vente" <?php echo $category == 'Vente' ? 'selected' : '' ?>>Vente</option>
                        <option value="Location" <?php echo $category == 'Location' ? 'selected' : '' ?>>Location</option>
                    </select>
                    <div class="text-danger"><?php echo isset($errors['category']) ? $errors['category'] : "" ?></div>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="type">Type</label>
                    <?php $type = $announcement['type'] ?? null; ?>
                    <select name="type" class="form-select">
                        <option value=""> -- </option>
                        <option value="Appartement" <?php echo $type == 'Appartement' ? 'selected' : '' ?>>Appartement</option>
                        <option value="Maison" <?php echo $type == 'Maison' ? 'selected' : '' ?>>Maison</option>
                        <option value="Villa" <?php echo $type == 'Villa' ? 'selected' : '' ?>>Villa</option>
                        <option value="Bureau" <?php echo $type == 'Bureau' ? 'selected' : '' ?>>Bureau</option>
                        <option value="Terrain" <?php echo $type == 'Terrain' ? 'selected' : '' ?>>Terrain</option>
                    </select>
                    <div class="text-danger"><?php echo isset($errors['type']) ? $errors['type'] : "" ?></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-outline my-4">
                    <label class="form-label" for="files">Photos</label>
                    <input type="file" id="files" name="files[]" multiple />
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-wrap ">
                    <?php foreach ($images as $k => $image) : ?>
                        <div class="me-3 mb-3 border p-2">
                            <img class="" src="/uploads/<?php echo $image["file_name"]; ?>" style="height:200px;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="img_primary" id="<?php echo $image['id'] ?>" value="<?php echo $image['id'] ?>" <?php echo $image['type'] == 'primary' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="<?php echo $image['id'] ?>">
                                    Principale
                                </label>
                            </div>
                            <?php if ($image['type'] != 'primary') : ?>
                                <span class="d-block"> <a href="/delete-image/?id=<?php echo $image['id'] . '&announcement_id=' . $announcement['id']; ?>" class="js-link-confirm"> Supprimer</a></span>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!-- <hr class="mt-3"> -->
        <div class="row mt-5">
            <div class="col text-end mb-3">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="/home" class="btn btn-outline-dark">Annuler</a>
            </div>
        </div>
    </div>
</form>