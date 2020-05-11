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
		case "register" :
			$firstname = valider("firstname");
			$name = valider("name");
			$birthday = valider("birthday");
			$mail = valider("mail");
			$password = valider("password");
			$password = password_hash($password, PASSWORD_DEFAULT);
			$username = valider("username");
			if(usernameExists($username)) {
				$data["feedback"] = "Username already used";
				break;
			}
			$id_role = valider("id_role");
			$id_category = valider("id_category");
			$data["id"] = register($firstname, $name, $birthday, $mail, $password, $username, $id_role, $id_category);
			$data["status"] = true;
			$data["feedback"] = "ok";

			$_SESSION["connected"] = true;
			$_SESSION["username"] = $username;
			$_SESSION["id"] = $data["id"];
		break;

		case 'connection' :
			$data['username'] = valider("username");
			$pass = valider("password");
			if(!usernameExists($data['username'])) {
				$data["status"] = true;
				$data["feedback"] = "Invalid username";
				break;
			}
			if (password_verify($pass, getPasswordForUser($data["username"]))) {
				$dataU = getUserByUsername($data['username']);
				$data["user"] = $dataU;
				$data["status"] = true;
				$data["feedback"] = "connected";

				$_SESSION["connected"] = true;
				$_SESSION["username"] = $data["user"]["username"];
				$_SESSION["id"] = $data["user"]["id"];
			}
			else
				$data["feedback"] = "Invalid password";
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


		// IncludeCharge /////////////////////////////////////////////////////////////////

		case 'addIncludeCharge':
			$cost = valider("cost");
			$comment = valider("comment");
			$data["id"] = addIncludeCharge($cost, $comment);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'delIncludeCharge':
			$id_charge = valider("id_charge");
			$data["INCLU"] = delIncludeCharge($id_charge);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'updateIncludeCharge':
			$cost = valider("cost");
			$comment = valider("comment");
			$id_charge = valider("id_charge");
			$data["INCLU"] = updateIncludeCharge($cost, $comment, $id_charge);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'getIncludeCharge':
			$id_charge = valider("id_charge");
			$data["INCLU"] = getIncludeCharge($id_charge);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'getIncludeCharges':
			$data["INCLU"] = getIncludeCharges();
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'getIncludeChargesByRun':
			$id_run = valider("id_run");
			$data["INCLU"] = getIncludeChargesByRun($id_run);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'getIncludeChargesByTypeCost':
			$id_type_cost = valider("id_type_cost");
			$data["INCLU"] = getIncludeChargesByTypeCost($id_type_cost);
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
