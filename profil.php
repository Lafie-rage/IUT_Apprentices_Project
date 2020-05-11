<style>
/* CSS Body/Html */
@font-face {font-family: "The Blacklist";src: url('The Blacklist.ttf');}
body,html{margin:0}
body{background-image:url(ressources/body-background.jpg);background-size:cover;background-repeat:no-repeat;background-attachments:fixed;overflow-x:hidden}

main {
  top : 200px;
  position: absolute;
}

/* CSS Connexion profil */
.profil-connexion {position: relative; bottom: 30%; right: 5%; z-index: 1;}
.lien-sign {position: relative; bottom: 0%; right: 12.5%; text-transform: uppercase; font-family: Blacklisted; text-decoration: none; color: #0275b4; z-index: 1;}

/* CSS Profil */
.profil{background-color:#c5bfbf;box-shadow:5px 5px 5px #5e6472;border-radius:5px}
.row-profil-bottom, .row-profil-middle, .row-profil-top{height:auto}
.row-profil-top .date {padding-left: .5rem;}
.row-profil-top span{font-size:1vw;vertical-align:middle}
.col-profil-modifier{left:60%}
.row-profil-middle{margin-top:2%;margin-bottom:2%}
.col-img-profil{bottom:10%}
.img-profil{width:70%;min-width:30%;height:250px;min-height:120px;overflow:hidden}
.col-profil-description{max-width:60%!important}

/* CSS Achievement */
.achievement{height:auto;background-color:#c5bfbf;box-shadow:5px 5px 5px #5e6472;border-radius:5px}
.img-achievement{width:60%;height:250px;overflow:hidden}
.info-achievement {color: #0275b4;}

/* CSS Commentaires */
.row-commentaire {background-color:#c5bfbf;box-shadow:5px 5px 5px #5e6472;border-radius:5px}

/* Responsive for mobile */
@media (min-width: 330px) and (max-width: 768px) {

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

  <?php include_once "header.php" ?>

  <!--Main Layout-->
  <main>
  <div class="container-fluid">
      <div class="row justify-content-between">
        <!-- Profil -->
        <div class="col-12 col-md-12 col-lg-7 p-2 profil">
            <div class="row row-profil-top">
              <div class="col-10">
                <div class="text-left p-2">
                  <h1 style="font-size: 2rem;">Talon benedicte<span>🟢</span></h1>
                  <h5 style="font-size: 1.2rem;">Inscrit depuis le 29/04/2020</h5>
                </div>
              </div>
              <div class="col-2">
                <a href="#"><img src="https://zupimages.net/up/20/19/xwsy.jpg" alt="" class="card-img-64 d-flex float-right img-profil-modifier"></a>
              </div>
            </div>
            <div class="row row-profil-middle">
              <div class="col-4 col-md-4 col-lg-4 col-img-profil">
                <img src="ressources/profil_bt.png" alt="" class="img-thumtail rounded-circle d-flex mx-auto img-profil">
              </div>
              <div class="col-8 col-md-8 col-lg-6 col-profil-description">
                <h1 style="font-size: 2rem;">Description</h1>
                <p style="font-size: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta, purus eget rhoncus ullamcorper, arcu tellus fermentum felis, in interdum. </p>
              </div>
            </div>
            <div class="row row-profil-bottom">
              <div class="col-12 col-md-12 col-lg-12 d-flex justify-content-around">
                <h3 style="font-size: 1rem;">Age : 30 ans</h3>
                <h3 style="font-size: 1rem;">Ville : Boulogne</h3>
                <h3 style="font-size: 1rem;">Club : Boulonnais</h3>
              </div>
            </div>
        </div>
        <!-- Profil -->

        <!-- Achievement -->
        <div class="col-12 col-md-12 col-lg-4 p-2 achievement">
          <div class="row row-achievement-top">
            <div class="col-6 col-achievement" id="victoire">
              <div class="text-center">
                <h1 class="font-weight-bold info-achievement" style="font-size: 1.8rem;">5</h1>
                <h3 style="font-size: 1.2rem;">Victoires</h3>
              </div>
            </div>
            <div class="col-6 col-achievement" id="discipline">
              <div class="text-center">
                <h1 class="font-weight-bold info-achievement" style="font-size: 1.8rem;">Triathlon</h1>
                <h3 style="font-size: 1.2rem;">Discipline Principale</h3>
              </div>
            </div>
          </div>
          <div class="row row-achievement-middle">
            <img src="https://zupimages.net/up/20/19/2d9s.jpg" alt="" class="d-flex mx-auto img-achievement">
          </div>
          <div class="row row-achievement-bottom">
            <div class="col-6 col-achievement" id="participation">
              <div class="text-center">
                <h1 class="font-weight-bold info-achievement" style="font-size: 1.8rem;">15</h1>
                <h3 style="font-size: 1.2rem;">Participations</h3>
              </div>
            </div>
            <div class="col-6 col-achievement" id="kilometre">
              <div class="text-center">
                <h1 class="font-weight-bold info-achievement" style="font-size: 1.8rem;">115</h1>
                <h3 style="font-size: 1.2rem;">KM parcouru(s)</h3>
              </div>
            </div>
          </div>
        </div>
        <!-- Achievement -->
      </div>

      <!-- Commentaires -->
      <div class="row mt-5 commentaire">
        <div class="col-12 col-md-12 col-lg-7">
          <div class="row d-flex mb-3 p-2 row-commentaire">
            <h1 style="font-size: 2rem;">Commentaire</h1>
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ajouter un commentaire..." aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-light" type="button">Ajouter</button>
              </div>
            </div>
          </div>
          <div class="row d-flex align-items-center mb-3 row-commentaire">
            <div class="col-2">
              <img src="https://zupimages.net/up/20/20/uu8r.jpg" alt="" class="card-img-64 rounded-circle mx-auto d-flex">
            </div>
            <div class="col-6">
              <h1 style="font-size: 2rem;">Arthur Taillez</h1>
              <p style="font-size: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta, purus eget rhoncus ullamcorper, arcu tellus fermentum felis, in interdum.</p>
            </div>
            <div class="col-4 text-right">
              <h4>29/04/19 à 15h23</h4>
            </div>
            </div>
          </div>
        </div>
      </div>

  </main>
<!--Main Layout-->
</body>
</html>
