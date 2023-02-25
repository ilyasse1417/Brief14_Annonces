<!-- <nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;"> -->
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/images/logo.png" alt="logo" style="height: 49px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a href="/listing" class="nav-link active" aria-current="page" href="#">Listing</a>
        </li>
        <?php if ($user = getUser()) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $user['email'] ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php">Mon profil</a></li>
              <li><a class="dropdown-item" href="profile.php?action=edit">Mes annonces</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/logout">logout</a></li>
            </ul>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href='/login' class="nav-link active" aria-current="page" href="#">Connexion</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>