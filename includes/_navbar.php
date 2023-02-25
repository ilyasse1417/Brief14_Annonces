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
      <!-- <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a href="index.php" class="nav-link active" aria-current="page" href="#">Listing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <?php if (auth()) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php">Mon profil</a></li>
              <li><a class="dropdown-item" href="profile.php?action=edit">Mes annonces</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">logout</a></li>
            </ul>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href='login.php' class="nav-link active" aria-current="page" href="#">Se connecter</a>
          </li>
          <li class="nav-item">
            <a href='register.php' class="nav-link active" aria-current="page" href="#">S'inscrire</a>
          </li>
        <?php endif ?>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>