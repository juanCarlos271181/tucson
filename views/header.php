<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navBar">
    <div class="container">
      <div class="logo" href="<?=$PATH;?>/index.php" id="logoTucson">
        <img src="<?=$PATH;?>img/logoBlue.png" alt="" style="width: 55%;">
      </div>
      <a class="navbar-brand" href="#!"><?=$HEADER_TITLE;?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?=$PATH;?>index.php">Home</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?=$PATH;?>views/login.php">Login</a></li>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>
