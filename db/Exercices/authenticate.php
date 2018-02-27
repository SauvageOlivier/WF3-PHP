<?php

$users = [
    ['login' => 'john', 'password'=> 'motDePasse'],
    ['login' => 'George', 'password'=> 'motDePasse1'],
    ['login' => 'test', 'password'=> 'motDePasse2']        
];

//---Autre synthaxe :
/*
$users = array(
    ('login' => 'john', 'password'=> 'motDePasse'),
    ('login' => 'George', 'password'=> 'motDePasse1'),
    ('login' => 'test', 'password'=> 'motDePasse2')        
);
*/


var_dump($_POST);

if (isset($_POST['login']) && isset($_POST['motDePasse'])) {
    $connected = false;
    foreach ($users as $user) {
        if ($user['login'] == $_POST['login'] && $user['password'] == $_POST['motDePasse']) {
            header('Location: user.php?login=' . $user['login']);
            die();
        }
    }
}

if ($connected) {
    echo 'Bienvenue';
    
} else {   
    header('Location: index.php');
    die();
}