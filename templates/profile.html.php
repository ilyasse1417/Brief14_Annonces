<div class="container mt-5">
    <div class="row">
        <div class="col-lg-5 m-auto">
            <?php foreach ($errors as $error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>
            <?php foreach ($messages as $message) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $message; ?>
                </div>
            <?php endforeach; ?>
            <h2>Mon profil</h2>
            <form action="/profile" method="POST">
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Nom</label>
                    <input type="text" name="lastname" id="form2Example1" class="form-control" maxlength="100" required value="<?php echo $client['lastname'] ?? '' ?>" />
                </div>
                <div class=" form-outline mb-2">
                    <label class="form-label" for="form2Example1">Prénom</label>
                    <input type="text" name="firstname" id="form2Example1" class="form-control" maxlength="100" required value="<?php echo $client['firstname'] ?? '' ?>"" />
                </div>
                <div class=" form-outline mb-2">
                    <label class="form-label" for="form2Example1">Email</label>
                    <input type="email" name="email" id="form2Example1" class="form-control" maxlength="200" required value="<?php echo $client['email'] ?? '' ?>"" />
                </div>
                <div class=" form-outline mb-2">
                    <label class="form-label" for="form2Example1">Téléphone</label>
                    <input type="tel" name="phone" id="form2Example1" class="form-control" minlength="10" required value="<?php echo $client['phone'] ?? '' ?>""  pattern='[0-9]{10}' />
                    <p class=" text-muted">Format autorisé : 0612345678</p>
                </div>
                <button type="submit" class="btn btn-primary w-100 my-4">Enregistrer</button>
            </form>
        </div>
    </div>
</div>