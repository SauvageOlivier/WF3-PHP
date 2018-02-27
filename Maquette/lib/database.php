<?php

define('HOST', 'localhost'); // Domaine ou IP du serveur ou est située la base de données
define('USER', 'root'); // Nom d'utilisateur autorisé à se connecter à la base
define('PASS', ''); // Mot de passe de connexion à la base
define('DB', 'diw8'); // Base de données sur laquelle on va faire les requêtes

function connexion() {

    // Tableau d'options supplementaires pour la connexion
    $db_options = array(
        //force encodage utf8
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
        // On récupère tous les résultats en tableau associatif
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        // On affiche des warnings pour les erreurs, à commenter en prod (valeur par défaut PDO::ERRMODE_SILENT)
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING 
    )

    // Connexion à la base locale diw8
    try {
        $db = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER, PASS);
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
    return $db;
}

