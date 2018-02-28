<?php
require_once('index.php');


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
        );

        // Connexion à la base locale diw8
        try {
            $db = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER
            , PASS, $db_options);
            
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
        return $db;
    }




    function validation() {
                global $form_errors;
                // Contrôle des champs
                if (strlen($_POST['firstname']) == 0)
                    $form_errors['firstname'] = 'Le prenom n\'est pas valide';
                if (strlen($_POST['lastname']) == 0)
                    $form_errors['lastname'] = 'Le nom n\'est pas valide';
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                    $form_errors['email'] = 'L\'email n\'est pas valide';
                if (strlen($_POST['gender']) == false)
                    $form_errors['gender'] = 'invalide';
                if (strlen($_POST['phone']) < 11)
                    $form_errors['phone'] = 'Le message n\'est pas valide';
            }
            $form_errors = [];
            // Si le formulaire a été soumis
            
            if (!empty($_POST) ) {
                validation();
                echo 'tesst moi !';
                if (count($form_errors) == 0) {
                    // Connexion à la base
                    $connexion = connexion();
                    // Préparation de la requête
                    
                    $requete = $connexion->prepare('INSERT INTO exoForm(firstname, lastname, email, gender, birthdate, phone, contactPhone, contactMail ) VALUES (:firstname, :lastname, :email, :gender, :birthdate, :phone, :contactPhone, :contactMail)');
                    $requete->bindValue(':firstname', htmlspecialchars($_POST['firstname']), PDO::PARAM_STR);
                    $requete->bindValue(':lastname', htmlspecialchars($_POST['lastname']), PDO::PARAM_STR);
                    $requete->bindValue(':email', htmlspecialchars($_POST['email']), PDO::PARAM_STR);
                    $requete->bindValue(':gender', htmlspecialchars($_POST['gender']), PDO::PARAM_STR);
                    $requete->bindValue(':birthdate', htmlspecialchars($_POST['birthdate']), PDO::PARAM_STR);
                    $requete->bindValue(':phone', htmlspecialchars($_POST['phone']), PDO::PARAM_STR);
                    $requete->bindValue(':contactPhone', htmlspecialchars($_POST['contactPhone']), PDO::PARAM_STR);
                    $requete->bindValue(':contactMail', htmlspecialchars($_POST['contactMail']), PDO::PARAM_STR);
                    // Exécution de la requête                 
                    $requete->execute();
                    // Vérification
                    $test=$requete->rowCount();
                    var_dump($test);
                    error_log($requete->rowCount() . " ligne insérée");
                }
            }
            




    function table_html($array) {
        $table = '<table class="table"><tr>';
        foreach(array_keys($array[0]) as $key) {
            $table .= '<th>' . $key . '</th>';
        }
        $table .= '</tr>';
        foreach($array as $row) {
            $table .= '<tr>';
            foreach($row as $value) {
                $table .= '<td>' . $value . '</td>';
            }
            $table .= '</tr>';
        }
        $table .= '</table>';
        
        return $table;
    }



        $db = connexion();
        if (isset($_GET['id'])) {
            // Préparation de la requête
            $query = $db->prepare("SELECT name AS Nom, firstName As Firstname, email AS Email, genre AS Genre, birthdate AS Birthdate, phone AS Phone, contactMail AS contactMail, contactPhone AS contactPhone FROM contact WHERE id = :id");
            $query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
            // Exécution de la requête
            $query->execute();
            // Récupération du résultat
            if (!$result = $query->fetchAll())
                echo "Rien à afficher";
            else {
                echo table_html($result);
            }
        }
        if (isset($_GET['name'])) {
            // Préparation de la requête
            $query = $db->prepare("SELECT name AS Nom, message AS Message FROM contact WHERE name = :name");
            $query->bindValue(':name', $_GET['name'], PDO::PARAM_STR);
            // Exécution de la requête
            $query->execute();
            // Récupération du résultat
            if (!$results = $query->fetchAll())
                echo "Rien à afficher";
            else {
                echo table_html($results);
            }
        }

    



