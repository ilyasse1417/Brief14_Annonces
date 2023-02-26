<form action="/new" method="POST" enctype="multipart/form-data">
    <div class="container pt-5">
        <div class="row">
            <div class="col pb-5">
                <h2>Ajouter une annonce</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">title</label>
                    <input type="text" name="title" id="form2Example1" class="form-control" required />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">price</label>
                    <input type="number" name="price" id="form2Example1" class="form-control" required />
                    <div class="text-danger"><?php echo isset($errors['price']) ? $errors['price'] : "" ?></div>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">category</label>
                    <select name="category" class="form-select" required>
                        <option selected>--</option>
                        <option value="sale">Vente</option>
                        <option value="rent">Location</option>
                    </select>
                    <div class="text-danger"><?php echo isset($errors['category']) ? $errors['category'] : "" ?></div>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">type</label>
                    <select name="type" class="form-select" required>
                        <option selected>--</option>
                        <option value="appartment">Appartement</option>
                        <option value="house">Maison</option>
                        <option value="villa">Villa</option>
                        <option value="office">Bureau</option>
                        <option value="field">Terrain</option>
                    </select>
                    <div class="text-danger"><?php echo isset($errors['type']) ? $errors['type'] : "" ?></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">city</label>
                    <input type="text" name="city" id="form2Example1" class="form-control" required />
                    <div class="text-danger"><?php echo isset($errors['city']) ? $errors['city'] : "" ?></div>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">address</label>
                    <input type="text" name="address" id="form2Example1" class="form-control" required />
                    <div class="text-danger"><?php echo isset($errors['address']) ? $errors['address'] : "" ?></div>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example2">postal_code</label>
                    <input type="text" name="postal_code" id="form2Example2" class="form-control" required />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example2">superficie</label>
                    <input type="number" name="superficie" id="form2Example2" class="form-control" required />
                </div>
                <div class="form-outline mb-2">
                    <label for="file">Choose files to upload</label>
                    <input type="file" id="file" name="files[]" multiple />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <button type="submit" class="btn btn-primary w-100 my-4">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</form>