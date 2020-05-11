<style>
  /* CSS NavBar */
  .navbar {background:url(ressources/header_nav_herbe.png), url(ressources/header_nav_ciel.jpg); position:absolute; background-position:bottom; background-size:40%, cover; background-repeat:repeat-x; left:0;right:0;top:0; margin-bottom: 2%;}
  .slogan {color: #0275b4 !important; font-family: "The Blacklist" !important;}
  #navbarNav {background-color: #c5bfbf; line-height: 2vw; width:40%; position: absolute; bottom: 0; right: 30%;}
  #header-img-profil {position: relative; left: 90;}
  .navbar.navbar-dark .navbar-toggler {color: #0275b4 !important; }
  .nav-link {color: #0275b4 !important; text-transform: uppercase; font-weight: 700;}
  .nav-link:hover {color: #F8F9FA;}
  .fas {color: #ffffff;}

  /* Reponsive for laptot */
  @media (min-width: 1025px) and (max-width: 1280px) {

    /* Responsive NavBar */
    .col-slogan {display: inline-block;}
    .slogan {position: relative; left: 0rem; top: 2rem; font-size: 2.3rem !important;}
    .navbar {padding: 0 !important; }
    #navbarNav {position: absolute !important; right: 18%; width: 60%;}
    .col-header-profil {display: block; position: relative; bottom: 0rem; left: 0rem;}
  }

  /* Responsive for tablet */
  @media (min-width: 768px) and (max-width: 1024px) {

    /* Responsive NavBar */
    .col-slogan {display: inline-block;}
    .slogan {position: relative; left: 13rem; top: 9rem;}
    .navbar {padding: 0 !important; }
    #navbarNav {position: initial;}
    .col-header-profil {display: block; position: relative; bottom: 0rem; left: 0rem;}

  }

  /* Responsive for tablet landscape */
  @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

    /* Responsive NavBar */
    .col-slogan {display: inline-block;}
    .slogan {position: relative; left: 0rem; top: 2rem; font-size: 2.3rem !important;}
    .navbar {padding: 0 !important; }
    #navbarNav {position: absolute !important; right: 18%; width: 60%;}
    .col-header-profil {display: block; position: relative; bottom: 0rem; left: 0rem;}

  }

  /* Responsive for mobile */
  @media (min-width: 330px) and (max-width: 768px) {

    /* Responsive NavBar */
    .navbar {padding: 0 !important;}
    .col-slogan {display: none;}
    #navbarNav {position: relative; right: 0%; width: 100%;}
    .navbarNav .nav-item {margin: 0rem !important;}
    .col-header-profil {display: block; position: relative !important; right: 7rem; top: 2rem;}
    .col-header-profil .row-sign {display: none;}

    .mx-3, .ml-3 {margin-left: 0rem !important}

  }

</style>

<header>
  <!--Main Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="row d-flex mx-auto w-100 justify-content-between">
      <div class="col-auto">
        <a class="navbar-brand" href="#"><img src="ressources/icon_logo_site.png" width="200" height="150" alt=""></a>
      </div>
      <div class="col-auto col-slogan">
        <span class="navbar-text display-4 mx-auto slogan">Sortez de votre can-app !</span>
      </div>
      <div class="col-auto col-header-profil">
        <div class="row">
          <a href="navbar-brand"><img id="header-img-profil" src="ressources/modifier-profil.jpg" alt="Profil" width="70" height="70"></a>
        </div>
        <div class="row">
          <a href="" class="nav-link row-sign">Connexion</a>
          <a href="" class="nav-link row-sign">Inscription</a>
        </div>
      </div>
    </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item mr-3">
            <a class="nav-link" href="#"><i class="fas fa-running"></i>&nbsp;Courses</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#"><i class="fas fa-poll"></i>&nbsp;résultat</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#"><i class="fas fa-dollar-sign"></i>&nbsp;Dépense</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link" href="#"><i class="fas fa-home"></i>&nbsp;A propos</a>
          </li>
        </ul>
      </div>
  </nav>
  <!--Main Navigation-->
</header>
