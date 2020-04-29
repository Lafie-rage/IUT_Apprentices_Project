<?php
session_start();

	//echo $_SERVER["REQUEST_URI"] . "<br />";

	include_once "libs/maLibUtils.php";
	include_once "libs/maLibSQL.pdo.php";
	include_once "libs/modele.php";

	$data["action"] = valider("action");
	$data["status"] = valider("status");

	// si on a une action, on devrait avoir un message classique
	$data["feedback"] = "action en echec";


	switch($data["action"])
	{

		// Utilisateurs /////////////////////////////////////////////////////////////
		// http://localhost/data.php?action=register&log=monLog&pseudo=monPseudo&pass=monPassword
		case "register" :
			$log = valider("log");
			if(loginExist($log) === false) {
				$data["feedback"] = "invalid log";
				break;
			}
			$pseudo = valider("pseudo");
			if(pseudoExist($pseudo) === false) {
				$data["feedback"] = "invalid log";
				break;
			}
			$pass = valider("pass");
			$pass = hash('sha256', $pass); // Utiliser password_hash()...
			$color = valider("color");
			$data["id"] = register($log, $pass, $pseudo, $color);
			$data["status"] = true;
			$data["feedback"] = "ok";

			$_SESSION["connected"] = true;
			$_SESSION["pseudo"] = $pseudo;
			$_SESSION["id"] = $data["id"];
		break;

		case 'connexion' :
			$data['log'] = valider("login");
			$pass = valider("password");
			$data['password'] = hash('sha256', $pass);
			if ($data["log"])
			if ($data["password"]) {
				if ($id = validerUser($data["log"], $data["password"])) {
					$dataU = getUser($id);
					$data["user"] = $dataU[0];
					$data["status"] = true;
					$data["feedback"] = "connecté";

					$_SESSION["connected"] = true;
					$_SESSION["pseudo"] = $data["user"]["pseudo"];
					$_SESSION["id"] = $data["user"]["id"];
				}
			}
			else
				$data["feedback"] = "erreur de connexion";
		break;

		case 'isConnected' :
			$data["isConnected"] = false;
			if (isset($_SESSION["connected"]))  {
				$data["isConnected"] = true;
				$data["USER"] = getUser($_SESSION["id"]);
			}
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'logout' :
			session_destroy();
			$data["feedback"] = "déconnecté";
		break;

		// Catégories //////////////////////////////////////////////////////////////////

		case 'getAllCateg' :
			$data["CATEG"] = getCateg();
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		// http://localhost/data.php?action=addCateg&titre=monTitre
		case 'addCateg' :
			$titre = valider('titre');
			$data["nb"] = addCateg($titre);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'delCateg' :
			$id = valider('id');
			$data["nb"] = delCateg($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;


		// Articles /////////////////////////////////////////////////////////////////

		case 'getAllArt' :
			$data["ART"] = getArticles();
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'getArtByCateg' :
			$categ = valider("categ");
			$data["ART"] = getArtByCateg($categ);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'getArt' :
			$id = valider('id');
			$data["ART"] = getArticle($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'updateArt' :
			$id = valider('id');
			$message = valider('message');
			$nbLigne = updateArt($id, $message);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'vue' :
			$id = valider('id');
			$data["nb"] = addView($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'addAtr' :
			$titre = valider('titre');
			$message = valider('message');
			$user = $_SESSION['id'];
			$date = date("Y-m-d");
			$data["nb"] = addAtr($titre, $message, $user, $date);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'delArt' :
			$id = valider('id');
			$data["nb"] = delArt($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		// Defaut ////////////////////////////////////////////////////////////////////////
		default :
			$data["action"] = "default";
			$data["status"] = false;
			$data["feedback"] = "action inconnue";
	}



	echo json_encode($data);

?>
