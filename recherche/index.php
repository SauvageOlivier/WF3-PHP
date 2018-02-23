<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Recherche php!</title>
</head>

<body>
   
    <h1 style = "font-size: 15px" >Hello, recherche en php</h1>

    <form class="form-control" action="" method="get">
        <input type="text" name="recherche">
        <button class="btn-warning">Search</button>
    </form>

    
    <?php

    require_once('recherche.php');

    if (isset($_GET['recherche'])) {
        echo recherche($_GET['recherche']);
    }
    
    $carte = [
        'Choix' => '',
        'Café' => 1.5,
        'Bière' => 4.5,
        'Sirop' => 2.5,
        'Whisky' => 6
    ];

    ?>


    <form class="form-control">
        <input class="form-control" type="search" name="recherche">
        <?php
            if (isset($_GET['choix_carte_vide']) && !($_GET['choix_carte_vide']) == 0){
                echo select('choix_carte_vide', $carte, true);
                echo ($_GET['choix_carte_vide']) . "€" ;
            }
        ?>
        <button class="btn-danger">Search</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>