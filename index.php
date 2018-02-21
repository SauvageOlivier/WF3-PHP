<?php
$prenom = "Master";

echo "<h1>";
echo "bonjour je m'appelle $prenom\n";
echo "<br>\n";
echo "bonjour je m'appelle $prenom" . "\n";
echo "<br>\n";
echo "Bonjour je m'appelle" .$prenom . "\n";
echo "</h1>\n";

$a;
$b;
$c = '';
$c = 'C';
echo $a ?? $b ?? $c ?? '';
echo "<br>\n";
$b = 'B';
echo $a ?? $b ?? $c;
echo "<br>\n";
$b = null;
echo $a ?? $b ?? $c;
echo "<br>\n";
$space1 = 10;
$space2 = 10;


switch ($space1 <=> $space2) {
    case -1:
        echo "space1 est plus petit que space2\n <br>";
        break;
    case 0:
        echo "space1 est égal à space2\n <br>";
        break;
    case 1:
        echo "space1 est plus grand que space2\n <br>";
        break;
}


//jouer avec timestamp
echo "début de la requete à : " . date("d/m/Y H:i:s", $_SERVER["REQUEST_TIME"]) . "\n<br>";

sleep(15);

echo "Fin de la requete à : " . date("d/m/Y H:i:s") . "\n<br>";