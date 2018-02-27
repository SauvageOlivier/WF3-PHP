<?php

$info_user = [
    0 => [
        'nom' => 'john',
        'prenom' => 'john',
        'email' => 'john.john@master.com',
        'birthdate' => '1980-04-05',
    ],
    1 => [
        'nom' => 'toto',
        'prenom' => 'toto',
        'email' => 'toto.toto@master.com',
        'birthdate' => '1985-04-05',
    ],
    2 => [
        'nom' => 'bob',
        'prenom' => 'bob',
        'email' => 'bob.bob@master.com',
        'birthdate' => '1990-04-05',
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <?php 
            foreach($info_user as $user) {
                echo "<tr>\n";
                echo "<td>" . $user['nom'] . "</td>\n";
                echo "<td>" . $user['prenom'] . "</td>\n";
                echo "<td>" . $user['email'] . "</td>\n";
                echo "<td>" . $user['birthdate'] . "</td>\n";
                echo "</tr>\n";
            }
        ?>
    </table>
</body>
</html>