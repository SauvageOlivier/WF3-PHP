<?php
    require_once('header.php');
?>

<?php
    $db = connexion();

    if(isset($_GET['id'])) {
        //preparation de la requete
        $query = $dbb->prepare("SELECT name AS Nom, email AS Email, message As message FROM contact WHERE id = :id");
        $query->bindValue(':id', $_GET['id'], PDO::PARAM_INIT);
        
        //Execution de la requete
        $query->execute();

        //recuperation des resultats
        if (!$results = $query->fetch()) {
            echo "Rien à afficher";
        } else {
            var_dump($result);

            echo 
            '<table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>

                <tr>
                    <td>' . $result['id'] .  '</td>
                    <td>' . $result['name'] .  '</td>
                    <td>' . $result['email'] .  '</td>
                    <td>' . $result['message'] .  '</td>  
                </tr>
            </table>'
            
            
        }
    };    
?>

<?php
    require_once('footer.php');
?>