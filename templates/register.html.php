<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 m-auto">
            <h2>Inscription</h2>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Nom</label>
                    <input type="text" name="lastname" id="form2Example1" class="form-control" />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Prénom</label>
                    <input type="text" name="firstname" id="form2Example1" class="form-control" />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Email</label>
                    <input type="email" name="email" id="form2Example1" class="form-control" />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example1">Téléphone</label>
                    <input type="tel" name="phone" id="form2Example1" class="form-control" />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example2">Mot de passe</label>
                    <input type="password" name="password" id="form2Example2" class="form-control" autocomplete="new-password"/>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example2">Confirmation mot de passe</label>
                    <input type="verifypassword" name="verifypassword" id="form2Example2" class="form-control" autocomplete="new-password"/>
                </div>
                <button type="submit" class="btn btn-primary w-100 my-4">Sign in</button>
                <div class="text-center">
                    <p>Déjà inscrit? <a href="#!">Connexion</a></p>
                </div>
            </form>
        </div>
    </div>
</div>