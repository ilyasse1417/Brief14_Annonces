<form action="/new" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col pb-3">
                <h2>Ajouter une annonce</h2>
            </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Titre</label>
                    <input type="text" name="title" id="form2Example1" class="form-control" required />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Prix</label>
                    <input type="number" name="price" id="form2Example1" class="form-control" required />
                    <div class="text-danger"><?php echo isset($errors['price']) ? $errors['price'] : "" ?></div>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example2">Superficie (m<sup>2</sup>)</label>
                    <input type="number" name="superficie" id="form2Example2" class="form-control" required />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Ville</label>
                    <input type="text" name="city" id="form2Example1" class="form-control" required />
                    <div class="text-danger"><?php echo isset($errors['city']) ? $errors['city'] : "" ?></div>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Adresse</label>
                    <input type="text" name="address" id="form2Example1" class="form-control" required />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example2">Code postal</label>
                    <input type="text" name="postal_code" id="form2Example2" class="form-control" required />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Catégorie</label>
                    <select name="category" class="form-select" required>
                        <option selected>--</option>
                        <option value="Vente">Vente</option>
                        <option value="Location">Location</option>
                    </select>
                    <div class="text-danger"><?php echo isset($errors['category']) ? $errors['category'] : "" ?></div>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Type</label>
                    <select name="type" class="form-select" required>
                        <option selected>--</option>
                        <option value="Appartement">Appartement</option>
                        <option value="Maison">Maison</option>
                        <option value="Villa">Villa</option>
                        <option value="Bureau">Bureau</option>
                        <option value="Terrain">Terrain</option>
                    </select>
                    <div class="text-danger"><?php echo isset($errors['type']) ? $errors['type'] : "" ?></div>
                </div>
                <div class="form-outline mt-4">
                    <label class="form-label" for="file">Photos</label>
                    <input type="file" id="file" name="files[]" multiple />
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