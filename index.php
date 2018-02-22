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
<?php
$prenom = "Master";

echo "<h1>";
echo "bonjour je m'appelle $prenom\n";
echo "<br>\n";
echo "bonjour je m'appelle $prenom" . "\n";
echo "<br>\n";
echo "Bonjour je m'appelle" .$prenom . "\n";
echo "</h1>\n";


//taleau multidimensionnel

$personnes = array(
    '0' => array(
        'nom' => 'Dupont',
        'prenom' => 'Pierre',
        'email' => 'pierre.d@gmail.com',
        'telephones' => array(
            'fixe' => '03 00 00 00 00',
            'portable' => '06 00 00 00 00'
        )
    ),
    '1' => array(
        'nom' => 'Dupont',
        'prenom' => 'Jean',
        'email' => 'jean.d@gmail.com',
        'telephones' => array(
            'fixe' => '03 00 00 00 00',
            'portable' => '06 00 00 00 00'
        )
    ),
    '2' => array(
        'nom' => 'Dupont',
        'prenom' => 'Marie',
        'email' => 'marie.d@gmail.com',
    ),
  );

foreach ($personnes as $budy) {
    if (isset($budy["telephones"])) 
        echo $budy["telephones"]["fixe"];
    echo "</li>\n";       
    };

echo "Les telephones fixe des personnes sont :\n";
echo "<ul>";



echo "<pre>"; // mise en forme 
var_dump($personnes); // presentation de tout le contenus   
echo "</pre>";


foreach($personnes as $cle_info => $info) {
    if(!is_array($info))
        echo "<li>$cle : $element</li>\n";
        else {
            foreach($info as $cle => $element)
                echo "<li>$cle : $element </li>\n";
        } 
}
echo "</ul>\n";