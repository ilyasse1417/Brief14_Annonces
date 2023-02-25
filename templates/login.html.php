<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 m-auto">
            <h2>Connexion</h2>
            <?php foreach ($errors as $error) : ?>
                <div class="text-danger py-2"><?php echo $error; ?></div>
            <?php endforeach; ?>
            <form action="/login" method="POST">
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email address</label>
                    <input type="email" name="email" id="form2Example1" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" name="password" id="form2Example2" class="form-control" />
                </div>
                <!-- <div class="row mb-4">
                    <div class="col">
                        <a href="#!">Forgot password?</a>
                    </div>
                </div> -->
                <button type="submit" class="btn btn-primary w-100 mb-4">Sign in</button>
                <div class="text-center">
                    <p>Not a member? <a href="/register">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>