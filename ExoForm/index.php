<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormulairePHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">
</head>
<body>


<form class="form-control" method="POST" action="form.php">
   

    <label for="id_firstname">Prénom : </label>
    <input type="text" id="id_firstname" name="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>"/>

    <label for="id_lastname">Nom : </label>
    <input type="text" id="id_lastname"name="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>"/>
    
    <label for="id_email">Email : </label>
    <input type="text" id="id_email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"/>

    <label for="id_gender">Civilité :</label>
    <select id="id_gender" name="gender">
        <option value="unknow">Non-renseigné</option>
        <option value="mister">Monsieur</option>
        <option value="miss">Madame</option>
    </select>

    <label for="id_birthdate">Date de naissance :</label>
    <input type="date" id="id_birthdate" name="birthdate" value="<?php echo isset($_POST['birthdate']) ? $_POST['birthdate'] : ''; ?>">

    <label for="id_phone">Téléphone : </label>
    <input type="text" id="id_phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"/>

    <label for="id_contactMail">Contact par mail : </label>
    <input type="checkbox" id="id_contactMail" name="contactMail" value="<?php echo isset($_POST['contactMail']) ? $_POST['contactMail'] : ''; ?>">

    <label for="id_contactPhone">Contact par Téléphone : </label>
    <input type="checkbox" id="id_contactPhone" name="contactPhone" value="<?php echo isset($_POST['contactPhone']) ? $_POST['contactPhone'] : ''; ?>">

    <button class="btn btn-warning" type="submit">Envoyé</button>
</form>





<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   

</body>
</html>