<style>
  /* CSS Body/Html */
  @font-face {font-family: "Blac"; src: url('Blacklisted.ttf');}
  @font-face {font-family: "The Blacklist"; src: url('The Blacklist.ttf');}
  body,html{margin:0}
  body{background-image:url(ressources/arriereplan.png);background-size:cover;background-repeat:no-repeat;background-attachments:fixed;overflow-x:hidden}
  /* CSS Body/Html */

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

  /* CSS Connexion profil */
  .profil-connexion {position: relative; bottom: 30%; right: 5%; z-index: 1;}
  .lien-sign {position: relative; bottom: 0%; right: 12.5%; text-transform: uppercase; font-family: Blac; text-decoration: none; color: #0275b4; z-index: 1;}

  /* CSS Profil */
  .profil{background-image:url(ressources/1.jpg);background-size:cover;background-repeat:no-repeat;background-attachments:fixed;overflow-x:hidden;box-shadow:5px 5px 5px #5e6472;box-shadow: 8px 8px 8px black;}
  .row-profil-bottom, .row-profil-middle, .row-profil-top{height:auto}
  .row-profil-top .date {padding-left: .5rem;}
  .row-profil-top span{font-size:1vw;vertical-align:middle}
  .col-profil-modifier{left:60%}
  .row-profil-middle{margin-top:2%;margin-bottom:2%}
  .col-img-profil{bottom:10%}
  .img-profil{width:70%;min-width:30%;height:250px;min-height:120px;overflow:hidden}
  .col-profil-description{max-width:60%!important}

  /* CSS Achievement */
  .achievement{height:auto;background-color:#c5bfbf;box-shadow:5px 5px 5px #5e6472;box-shadow: 8px 8px 8px black;}
  .img-achievement{width:60%;height:250px;overflow:hidden}
  .info-achievement {color: #0275b4;}

  /* Responsive for tablet */

  /* css Mathilde */
  #all,#all1 {
  	margin-left: 50%;
  	width: 100px;
  }

  #categorie{
  	margin-left: 5%;
  	margin-bottom: 8%;
  	font-family: Blac;
  }

  #categories{
  	margin-left: 5%;
  	font-family: Blac;
  }

  #nom {
  	border-top: black solid 1px;
  }

  #categorie1{
      font-size: 30px;
      font-family: Blac;
      color: black;
      padding-left: 5%;
      padding-right: 5%;
      text-align: justify;
      margin-top: 5%;
  }

  #impact{
      font-size: 20px;
      font-family: Impact;
      color: grey;
      text-align: justify;
      padding-left: 5%;
      padding-right: 5%;
  }

  #velo{
  	margin-top: -2%;
      max-width : 100%;
      height:  auto;
      display: block;
      float: right;
  }

  @media (min-width: 1024px) and (max-width: 1460px) and (orientation: landscape) {

    #all {
    	width : 100px;
    	padding-top: 15%;
    	margin-top: 10%;
    }

    #all1 {
    	width : 100px;
    	padding-top: 15%;
    	margin-top: 30%;
    }

    #nom {
    	margin-bottom: -3%;
    	padding-top: 2%;
    	margin-left: 8%;
    	padding: 5%;
    }

     #nom1 {
    	margin-left: 8%;
    	margin-top: 10%;
    }

    #categorie1{
      	font-size: 25px;
      }

      #impact{
      	font-size: 19px;
      }

  }



  /* Responsive for mobile */
  @media (min-width: 330px) and (max-width: 767px) {

    /* Responsive Profil */
    .profil {margin-bottom: 1rem;;}
    .card-img-64 {width: 34px !important; height: 34px !important;}
    .img-profil {width: auto; height: 80px;}
    .row-profil-top .name {font-size: 6vw;}
    .row-profil-top .name span {font-size: 3vw;}
    .row-profil-top .date {font-size: 4vw; padding-left: .2rem;}
    #profil-information {font-size: 1rem !important;}

    /* Responsive achievement*/
    .img-achievement {width: 40%; height: 120px;}

    	#all,#all1{
          display: none;
      }

      #nom{
      	margin-top: -7%;
      	border-top: black solid 1px;
      	text-align: center;
      }

      #nom1{
      	margin-top: 0%;
      	text-align: center;
      }

      #nav{
      	margin-bottom: -6.5%;
      }

      #categorie1{
      	font-size: 22px;
      }

      #impact{
      	font-size: 16px;
      }

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

	<?php include_once "header.php"?>

  <!--Main Layout-->
  <main>
  <div class="container-fluid">
      <div class="row justify-content-between">
        <!-- Profil -->
        <div class="col-12 col-md-12 col-lg-7 p-2 profil">
          <nav>
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-1z" data-slide-to="1"></li>
              <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!--First slide-->
              <div class="carousel-item active">
                <img class="d-block w-100"
                  src="ressources/ban.png"
                  alt="First slide"
                  id="img">
              </div>
              <!--/First slide-->
              <!--Second slide-->
              <div class="carousel-item">
                <img class="d-block w-100"
                  src="ressources/ban1.png"
                  alt="Second slide"
                  id="img">
              </div>
              <!--/Second slide-->
              <!--Third slide-->
              <div class="carousel-item">
                <img class="d-block w-100"
                  src="ressources/ban2.png"
                  alt="Third slide"
                  id="img">
              </div>
              <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
          </div>
          <!--/.Carousel Wrapper-->
          </nav>
        </div>

        <!-- Achievement -->
        <div class="col-12 col-md-12 col-lg-5 p-2 achievement">
          <!--Menu de droite -->
          <div class="row" id="menu">
            <nav class="nav flex-column" id="nav">

              <div class="row" id="gris">
                	<div class="col-md-2">
  	                <img width="100%"
  	                  src="ressources/duathlon.jpg"
  	                  alt=""
  	                  id="all1">
                	</div>
                  <div class="col-md-9" id="nom1">
                  <a class="nav-link" href="" id="categorie">Duathlon</a>
                </div>

                <div class="col-md-2">
                  <img width="100%"
                    src="ressources/triathlon.jpg"
                    alt=""
                    id="all"
                    >
                </div>
                <div class="col-md-9" id="nom">
                  <a class="nav-link" href="" id="categorie">Triathlon</a>
                </div>

                <div class="col-md-2">
                  <img width="100%"
                    src="ressources/swimrun.jpg"
                    alt=""
                    id="all"
                    >
                </div>
                <div class="col-md-9" id="nom">
                  <a class="nav-link" href="" id="categorie">Aquathlon</a>
                </div>

                <div class="col-md-2">
                  <img width="100%"
                    src="ressources/run.jpg"
                    alt=""
                    id="all"
                    >
                </div>
                <div class="col-md-9" id="nom">
                  <a class="nav-link" href="" id="categorie">Run&Bike</a>
                </div>

                <div class="col-md-2">
                  <img width="100%"
                    src="ressources/plus.jpg"
                    alt=""
                    id="all"
                    >
                </div>
                <div class="col-md-9" id="nom">
                  <a class="nav-link" href="" id="categories">Voir plus</a>
                </div>
              </div><hr>

            </div>
        </div>
        <!-- Achievement -->
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 col-lg-7 p-0">
        <!--Carousel Wrapper-->

        <p id="categorie1">Bienvenue sur CAN'APP, l'application dediee a l'univers du sport !</p>

        <p id="impact">
          CAN'APP est la nouvelle application de gestion de vos courses !
          Grâce à cette application, il est possible de suivre les prochaines courses qui seront organisées.
        </p>

        <p id="impact">
          Doté d'un système de partage, il vous sera possible en tant que membres, d'indiquer vos prochaines participations ainsi que marquer celle déjà effectuées. Vous pourrez ainsi y renseigner vos dépenses réalisées en détail ainsi que vos performances.
        </p>

        <p id="impact">
          CAN'APP c'est l'application de suivi des courses de votre club !
        </p>

      </div>

      <div class="col-12 col-md-12 col-lg-5" id="velo">
        <!--Carousel Wrapper-->
        <img class=img-responsive src="ressources/velo.png" id="velo" width="1000">

      </div>

    </div>
  </div>


  </main>
<!--Main Layout-->
</body>
</html>
