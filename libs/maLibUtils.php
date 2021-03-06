<?php


/**
 * @file maLibUtils.php
 * Ce fichier definit des fonctions d'acc�s ou d'affichage pour les tableaux superglobaux
 */

/**
 * Verifie l'existence (isset) et la taille (non vide) d'un parametre dans un des tableaux GET, POST, COOKIES, SESSION
 * Renvoie false si le parametre est vide ou absent
 * @note l'utilisation de empty est critique : 0 est empty !!
 * Lorsque l'on teste, il faut tester avec un ===
 * @param string $nom
 * @param string $type
 * @return string|boolean
 */
function valider($nom,$type="REQUEST") {
	switch($type)	{
		case 'REQUEST':
		if(isset($_REQUEST[$nom]) && !($_REQUEST[$nom] == ""))
			return $_REQUEST[$nom];
		break;
		case 'GET':
		if(isset($_GET[$nom]) && !($_GET[$nom] == ""))
			return $_GET[$nom];
		break;
		case 'POST':
		if(isset($_POST[$nom]) && !($_POST[$nom] == ""))
			return $_POST[$nom];
		break;
		case 'COOKIE':
		if(isset($_COOKIE[$nom]) && !($_COOKIE[$nom] == ""))
			return $_COOKIE[$nom];
		break;
		case 'SESSION':
		if(isset($_SESSION[$nom]) && !($_SESSION[$nom] == ""))
			return $_SESSION[$nom];
		break;
		case 'SERVER':
		if(isset($_SERVER[$nom]) && !($_SERVER[$nom] == ""))
			return $_SERVER[$nom];
		break;
	}
	return false; // Si pb pour r�cup�rer la valeur
}


/**
 * V�rifie l'existence (isset) et la taille (non vide) d'un param�tre dans un des tableaux GET, POST, COOKIE, SESSION
 * Prend un argument d�finissant la valeur renvoy�e en cas d'absence de l'argument dans le tableau consid�r�

 * @param string $nom
 * @param string $defaut
 * @param string $type
 * @return string
*/
function getValue($nom,$defaut=false,$type="REQUEST") {
	// NB : cette commande affecte la variable resultat une ou deux fois
	if (($resultat = valider($nom,$type)) === false)
		$resultat = $defaut;

	return $resultat;
}


function tprint($tab) {
	echo "<pre>\n";
	print_r($tab);
	echo "</pre>\n";
}

?>
