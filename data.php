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
				$_SESSION["pseudo"] = $data["user"]["username"];
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

		// Runs ////////////////////////////////////////////////////////////////////////

		case 'addRun':
			$label = valider("label");
			$date = valider("date");
			$distance = valider("distance");
			$unit = valider("unit");
			$city = valider("city");
			$field = valider("field");
			$type = valider("type");
			$category = valider("category");
			$data["id"] = addRun($label,$date,$distance,$unit,$city,$field,$type,$category);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'delRun':
			$id = valider("id");
			$data["id"] = delRun($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'getRuns':
			$data["id"] = getRuns();
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'getRun':
			$id = valider("id");
			$data["id"] = getRun($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		case 'getRunsByType_run':
			$id = valider("id");
			$data["id"] = getRunsByType_run($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'getRunsByType_field':
			$id = valider("id");
			$data["id"] = getRunsByType_field($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'updateRun':
			$id = valider("id");
			$label = valider("label");
			$date = valider("date");
			$distance = valider("distance");
			$unit = valider("unit");
			$city = valider("city");
			$data["id"] = updateRun($id,$label,$date,$distance,$unit,$city);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
			
		case 'getRunsByCategoryAge':
			$id = valider("id");
			$comment = valider("id");
			$data["id"] = getRunsByCategoryAge($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
			break;
		
		case 'getRunsByUser':
			$id = valider("id");
			$comment = valider("id");
			$data["id"] = getRunsByUser($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'getRunsByClub':
			$id = valider("id");
			$comment = valider("id");
			$data["id"] = getRunsByClub($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;

		// Clubs ////////////////////////////////////////////////////////////////////////

		case 'addclub':
			$labelClub = valider("labelClub");
			$avatar = valider("avatar");
			$name = valider("name");
			$phone = valider("phone");
			$address = valider("address");
			$mail = valider("mail");
			$data["id"] = addclub($label_club,$avatar,$name,$phone,$address,$mail);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'getClub':
			$id = valider("id");
			$data["id"] = getClub($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'nameExist':
			$label_club = valider("label_club");
			$data["id"] = nameExist($label_club);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'getClubByUser':
			$id = valider("id");
			$data["id"] = getClubByUser($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		
		case 'getClubByUser':
			$id = valider("id");
			$data["id"] = getClubByUser($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'updateClub':
			$id_club = valider("id_club");
			$nameClub = valider("nameClub");
			$avatar = valider("avatar");
			$name = valider("name");
			$phone = valider("phone");
			$address = valider("address");
			$mail = valider("mail");
			$data["id"] = updateClub($nameClub, $avatar, $name, $phone, $address, $mail, $id_club);
			$data["status"] = true;
			$data["feedback"] = "ok";
		
		break;

		// TypeField ////////////////////////////////////////////////////////////////////////

		case 'addTypeField':
			$label = valider("label");
			$data["id"] = addTypeField($label);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'getClub':
			$id = delTypeField("id");
			$data["id"] = delTypeField($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'getTypesField':
			$data["id"] = getTypesField();
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'getTypeField':
			$id = valider("id");
			$data["id"] = getTypeField($id);
			$data["status"] = true;
			$data["feedback"] = "ok";
		break;
		
		case 'getTypeFieldByRun':
			$id = valider("id");
			$data["id"] = getTypeFieldByRun($id);
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
