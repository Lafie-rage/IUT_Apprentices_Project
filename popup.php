<style media="screen">

  .wrap {
    position: fixed;
    background-color: rgba(87, 86, 86, 0.5);
    width: 100%;
    height: 100%;
    z-index: 10;
    top: 0px;
    display: none;
  }

  body {
    height: 100vh;
    display: -webkit-box;
    display: flex;
    font-family: sans-serif;
    background-color: #0275b4;

  }

  .modal {
    background-color: #fff;
    max-width: 80%;
    max-height: 80%;
    text-align: left  ;
    border-radius: .5em;
    display: none;
  }

  .modal.is-active {
    display: -webkit-box;
    display: flex;
    display: block;
  }

  .btn-open {
    display: none;
  }

  .btn-open.is-active {
    display: block;
  }


  h1 {
    font-size: 30px;
    font-weight: bold;
    color : #0275b4;
    margin-bottom: 50px;
  }

  a{
    color: #0275b4;
  }


  .inscription{
    background-color: #0275b4;
    padding:20px 0 20px 0;
    font:bold 15px Arial;
    color:#fff;
    width:400px;
    border:none;
  }

  .item {
  position: relative;
  margin: 10px 0;
  }
  .item:hover p, .item:hover i {
  color: #095484;
  }
  input:hover, select:hover, textarea:hover {
  box-shadow: 0 0 5px 0 #095484;
  }

  button {
  width: 150px;
  padding: 10px;
  border: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  background-color: #095484;
  font-size: 16px;
  color: #fff;
  cursor: pointer;
  }
  button:hover {
  background-color: #0666a3;
  }
  @media (min-width: 568px) {
  .name-item, .city-item {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  }
  .name-item input, .city-item input {
  width: calc(50% - 20px);
  }
  .city-item select {
  width: calc(50% - 8px);
  }
  }
  .hide {
    display: none !important;
  }


</style>

<div class="wrap" id="loginPopup">
  <div class="modal hide js-modal">
    <div class="">
      <h1>CONNECTEZ-VOUS</h1>
    </div>
    <form action="data.php" method="post">

      <div class="item row justify-content-around">
        <input class="col-9" type="Email" name="name" placeholder="Email :"/>
      </div>

      <div class="item row justify-content-around">
        <input type="password" name="name" placeholder="Mot de passe :"/>
      </div>

      <div class="item row justify-content-around">
        <input type="checkbox" id="check" name="interest" value="coding" checked>
        <label for="coding">Se Souvenir de moi</label>
      </div>

      <div class="item row justify-content-around">
        <select class="" name="">
          <option value="admin">Club</option>
          <option value="user">Membre</option>
        </select>
      </div>

    </form>
    <button class="js-close inscription">Connexion</button><br><br>
    <a href="">Mot de passe oublié ?</a>
    <p>Vous n'êtes pas inscrit<a href=" ">Inscription</a>
  </div>
</div>

<div class="wrap">
  <div class="modal js-modal">
    <div class="">
      <h1>INSCRIVEZ-VOUS</h1>
    </div>
    <form action="..." method="post">

      <div class="item row justify-content-around">
        <input class="col-5" type="text" id="name" name="user_name"  placeholder="Nom :">
        <input class="col-5" type="text" id="first_name" name="user_firstname"  placeholder="Prénom">
      </div>

      <div class="item row justify-content-around">
        <input class="col-11" type="email" name="email"  placeholder="Email :"/>
      </div>

      <div class="item row justify-content-around">
        <input class="col-5" type="password" id="password" name="user_password" placeholder="Mot de passe :">
        <input class="col-5" type="password" id="confirm_password" name="confirm_password" placeholder="Confirmation :">
      </div>

      <div class="item row justify-content-around">
        <input class="col-5" type="text" id="Naissance" name="user_date" placeholder="Date de Naissance :">
        <input class="col-5" type="text" id="Ville" name="user_phone" placeholder="Téléphone :">
      </div>

      <div class="item row justify-content-around">
        <input class="col-11" type="text" name="adresse"  placeholder="Adresse :"/>
      </div>

      <div class="item row justify-content-around">
        <input class="col-5" type="text" id="postal" name="user_postal" placeholder="Code Postal :">
        <input class="col-5" type="text" id="Ville" name="user_ville" placeholder="Ville :">
      </div>

      <div class="item row justify-content-around">
        <input class="col-11" type="text" name="Club"  placeholder="Club"/>
      </div>

    </form>
    <button class="js-close inscription">Je M'inscris</button>
  </div>
</div>

<script type="text/javascript" src="script/register.js"></script>
