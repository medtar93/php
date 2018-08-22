<?php
/* Ce fichier sera inclus dans TOUS les scripts (hors inc eux mêmes) pour initialiser les éléments suivants :
- connexion à la BDD
- créer ou ouvrir une session 
- définir le chemin absolu du site (comme dans wordpress)
-inclure le fichier fonctions.inc.php à la fin de ce fichier pour l'embarquer dans tous les scripts.
*/

// connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=site_commerce', // driver mysql : serveur ; nom de la BDD
			   'root', // pseudo de la BDD
			   '',     // mot de passe de la BDD
			   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,  // option 1 : pour afficher les erreurs SQL
			         PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')	// option 2 : définit le jeu de caractères des échanges avec la BDD
              );

//créer ou ouvrir une session 
session_start();


//définir le chemin absolu du site (comme dans wordpress)
define('RACINE_SITE', '/PHP/07-site/' ); // cette constante servira à créer les chemins absolus utilisés dans haurinc.php car ce fichier sera inclus dans des scripts qui e situent dans des dossiers différents du site. On ne peut donc pas faire de chemin relatif dans ce fichier.

// Variable d'affichage :
$contenu = '';
$contenu_gauche = '';
$contenu_droite = '';

// inclusion du fichier fonction.inc.php :
require_once('fonction.inc.php');