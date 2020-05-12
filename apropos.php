<style media="screen">
  /* CSS Body/Html */
  @font-face {font-family: "Blac"; src: url('Blacklisted.ttf');}
  @font-face {font-family: "The Blacklist"; src: url('The Blacklist.ttf');}
  /* header's style */
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


  .thumbnail{
      background-color: #c5bfbf;
      border-radius: 10px;
      text-align: center;
      font-weight: bold;
      border:2px solid black;
      margin-bottom: 10px;
  }

  #par {
      margin-right: -50%;
  }

  body {
      background-image: url(../ressources/arriereplan.png);
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
  }

</style>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Can'APP</title>
  <link rel="icon" type="image/png" href="ressources/logo_site.png">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

</head>

<body>
  <!-- DEBUT DU PROJET-->

  <?php include_once "header.php"; ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 p-0">
        <!--Carousel Wrapper-->

        <!--/.Carousel Wrapper-->

        <p class="h1 mt-5 pb-4">A PROPOS</p>

        <p id="par">
          CAN'APP est la nouvelle application de gestion de vos courses !
        <br><br>
          Elle a été développé par un groupe de 18 étudiants de DUT Informatique en 2ème année alternance à l'IUT de Calais.

          Pour effectuer ce projet, nous avons utilisé la méthode agile et notamment l'outil Trello pour plannifier notre travail.
          <a href="https://trello.com/b/K4tiBihD/projet-app"> Cliquez-ici pour accèder le Trello </a>
        <br><br>
          Nous nous sommes répartis en 3 équipes de 6, comprenant pour chacune un scrum master, le tout supervisé par un super scrum master. Nous avons également choisi des tech-leadeurs permettant de nous aider dans chaque outil de développement selon leurs compétences.
        </p>

      </div>

      <!-- Third (Works) section -->
<section class="section" id="themes">
  <div class="container">

    <div class="row">
      <div class="col-sm-4 col-sm-offset-2">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot1.jpg" alt="">
          <div class="caption">
            <a href="LI.png"><img src="ressources/perso/mathilde.png" alt= "nom de ton image" width="100" align="center"></a>
            <h3>BERTHE Mathilde</h3>
            <p>Maquette</p>
            <p>Intégration HTML/CSS</p>
            <p>
              <a href="https://www.linkedin.com/in/mathilde-berthe-a9b20a18a/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=berthe.mathilde@hotmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
              <a href="https://mathildebosco.wixsite.com/mathildeberthe"><img src="ressources/site.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
             <a href="LI.png"><img src="ressources/perso/leob.png" alt= "nom de ton image" width="90" align="center"></a>
            <h3>BRENET Léo</h3>
            <p>Base de données</p>
            <p>Développement back-end</p>
            <p>
              <a href="https://www.linkedin.com/in/l%C3%A9o-brenet-475761194/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=brenet.leo10@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="noah.jpg"><img src="ressources/perso/noah.jpg" alt= "nom de ton image" width="105" align="center"></a>
            <h3>CHATELAIN Noah</h3>
            <p>Développement back-end</p>
            <p>Développement front-end</p>
            <p>
              <a href="https://www.linkedin.com/in/noah-chatelain/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=Email : noah.chtl@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
              <a href="http://noah-chatelain.fr/"><img src="ressources/site.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="ano.png"><img src="ressources/perso/ano.png" alt= "nom de ton image" width="105" align="center"></a>
            <h3>DECLERCK Théo</h3>
            <p>Développement back-end</p>
            <p>Développement front-end</p>
            <p>
              <a href="https://www.linkedin.com/in/théo-declerck-847347177/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=Email : the.declerck@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="corentin.jpg"><img src="ressources/perso/corentin.jpg" alt= "nom de ton image" width="105" align="center"></a>
            <h3>DESTREZ Corentin</h3>
            <p>Développement back/front-end dynamique</p>
            <p>Gestion du serveur</p>
            <p>
              <a href="https://www.linkedin.com/in/corentin-destrez-15a082159/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=corentin.destrez62@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="wassim.png"><img src="ressources/perso/wassim.png" alt= "nom de ton image" width="105" align="center"></a>
            <h3>DJAMAA Wassim</h3>
            <p>Base de données</p>
            <p>Développement back-end</p>
            <p>
              <a href="https://www.linkedin.com/in/wassim-djamaa-6b72b5159/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=wassim.djamaa@sfr.fr"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
              <a href="https://wassimdjamaa1.wixsite.com/wassimdjamaa"><img src="ressources/site.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="faustine.jpg"><img src="ressources/perso/faustine.jpg" alt= "nom de ton image" width="105" align="center"></a>
            <h3>FIOLET Faustine</h3>
            <p>Maquette</p>
            <p>Intégration HTML/CSS</p>
            <p>
              <a href="https://www.linkedin.com/in/faustine-fiolet-25a1a8185/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=fioletfaustine@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="ano.png"><img src="ressources/perso/ano.png" alt= "nom de ton image" width="105" align="center"></a>
            <h3>GYRE Ambroise</h3>
            <p>Développeur back-end</p>
            <p>Développeur front-end</p>
            <p>
              <a href="https://www.linkedin.com/in/ambroise-gyre-4974a6193/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=gyre.ambroise@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="ano.png"><img src="ressources/perso/ano.png" alt= "nom de ton image" width="105" align="center"></a>
            <h3>HEUMEL Léo</h3>
            <p>Intégration HTML/CSS</p>
            <p>Développement back-end</p>
            <p>
              <a href=" https://www.linkedin.com/in/l%C3%A9o-heumel-10a314179/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=leo.heumel@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="alexandre.jpg"><img src="ressources/perso/alexandre.png" alt= "nom de ton image" width="100" align="center"></a>
            <h3>JOURNEE Alexandre</h3>
            <p>Développement back-end</p>
            <p>Développement front-end</p>
            <p>
              <a href="https://www.linkedin.com/in/alexandre-journ%C3%A9e-7277a4186/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=alexandre.journee@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="ano.png"><img src="ressources/perso/ano.png" alt= "nom de ton image" width="105" align="center"></a>
            <h3>LASSUS Léo</h3>
            <p>Intégration HTML/CSS</p>
            <p>Développement front-end</p>
            <p>
              <a href="https://www.linkedin.com/in/leo-lassus-148a051a1/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=leo.lassus.ll@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="claire.jpg"><img src="ressources/perso/claire.jpg" alt= "nom de ton image" width="105" align="center"></a>
            <h3>PACOU Claire</h3>
            <p>Maquette</p>
            <p>Intégration HTML/CSS</p>
            <p>
              <a href="https://www.linkedin.com/in/claire-pacou-8a78a3194/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=claire.pacou@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="arthur.jpg"><img src="ressources/perso/arthur.jpg" alt= "nom de ton image" width="105" align="center"></a>
            <h3>TAILLEZ Arthur</h3>
            <p>Intégration HTML/CSS</p>
            <p>Développement front-end</p>
            <p>
              <a href="https://www.linkedin.com/in/arthur-t-73b07711b/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=arthur.taillez@outlook.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
              <a href="https://arthur-taillez-cv.fr/"><img src="ressources/site.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="paul.png"><img src="ressources/perso/paul.png" alt= "nom de ton image" width="105" align="center"></a>
            <h3>VAISSEAU Paul</h3>
            <p>Intégration HTML/CSS</p>
            <p>Développement front-end</p>
            <p>
              <a href="https://www.linkedin.com/in/paul-vaisseau-11b947186/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=paulvaisseau@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
              <a href="http://www.paul-vaisseau.fr/"><img src="ressources/site.png" alt= "nom de ton image" width="35"></a>
          </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="maxime.png"><img src="ressources/perso/maxime.png" alt= "nom de ton image" width="110" align="center"></a>
            <h3>VITSE Maxime</h3>
            <p>Base de données</p>
            <p>Gestion du serveur</p>
            <p>
              <a href="https://www.linkedin.com/in/mvitse/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=maxime.vitse@live.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
              <a href="https://mvitse.fr/"><img src="ressources/site.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="timothee.png"><img src="ressources/perso/timothee.png" alt= "nom de ton image" width="105" align="center"></a>
            <h3>WATEL Timothée</h3>
            <p>Intégration HTML/CSS</p>
            <p>Développement front-end</p>
            <p>
              <a href="https://www.linkedin.com/in/timoth%C3%A9e-watel-232030188/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=watel.timothee@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="thierry.png"><img src="ressources/perso/thierry.png" alt= "nom de ton image" width="105" align="center"></a>
            <h3>XU Thierry</h3>
            <p>Développement back-end</p>
            <p>Base de données</p>
            <p>
              <a href="https://www.linkedin.com/in/thierry-xu-43b89817b/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=thierryxu60@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/screenshots/sshot4.jpg" alt="">
          <div class="caption">
            <a href="iheb.png"><img src="ressources/perso/iheb.png" alt= "nom de ton image" width="105" align="center"></a>
            <h3>ZEKRI Iheb</h3>
            <p>Développement back-end</p>
            <p>Base de données</p>
            <p>
              <a href="https://www.linkedin.com/in/iheb-zekri-alternance-r%C3%A9seau-septembre-2020-/"><img src="ressources/LI.png" alt= "nom de ton image" width="30"></a>
              <a href="mailto:?to=zekri.iheb99@gmail.com"><img src="ressources/mail.png" alt= "nom de ton image" width="35"></a>
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>



    </div>
  </div>

  <!-- /FIN DU PROJET-->

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.js"></script>

</body>

</html>
