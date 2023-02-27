<div class="container mt-5">
    <div class="row">
        <div class="col-lg-5 m-auto">
            <h2>Inscription</h2>
            <div class="text-danger">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li> <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <form action="/register" method="POST">
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Nom</label>
                    <input type="text" name="lastname" id="form2Example1" class="form-control" maxlength="100" required value="<?php echo $_POST['lastname'] ?? '' ?>" />
                </div>
                <div class=" form-outline mb-2">
                    <label class="form-label" for="form2Example1">Prénom</label>
                    <input type="text" name="firstname" id="form2Example1" class="form-control" maxlength="100" required value="<?php echo $_POST['firstname'] ?? '' ?>" />
                </div>
                <div class=" form-outline mb-2">
                    <label class="form-label" for="form2Example1">Email</label>
                    <input type="email" name="email" id="form2Example1" class="form-control" maxlength="200" required value="<?php echo $_POST['email'] ?? '' ?>" />
                </div>
                <div class=" form-outline mb-2">
                    <label class="form-label" for="form2Example1">Téléphone</label>
                    <input type="tel" name="phone" id="form2Example1" class="form-control" value="<?php echo $_POST['phone'] ?? '' ?>" />
                    <!-- <p class="text-muted">Format autorisé : 0612345678</p> -->
                </div>
                <div class=" form-outline mb-2">
                    <label class="form-label" for="form2Example2">Mot de passe</label>
                    <input type="password" name="password" id="form2Example2" class="form-control" minlength="6" autocomplete="new-password" required />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example2">Confirmation mot de passe</label>
                    <input type="password" name="verifypassword" id="form2Example2" class="form-control" minlength="6" autocomplete="new-password" required />
                </div>
                <button type="submit" class="btn btn-primary w-100 my-4">Sign in</button>
                <div class="text-center">
                    <p>Déjà inscrit? <a href="/login">Connexion</a></p>
                </div>
            </form>
        </div>
    </div>
</div>