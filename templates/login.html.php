<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 m-auto">
            <h2>Connexion</h2>
            <?php foreach ($errors as $error) : ?>
                <div class="text-danger py-2"><?php echo $error; ?></div>
            <?php endforeach; ?>
            <form action="/login" method="POST">
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" required />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required />
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-4">Sign in</button>
                <div class="text-center">
                    <p>Vous n'avez pas encore de compte ? <a href="/register">Inscrivez-vous</a></p>
                </div>
            </form>
        </div>
    </div>
</div>