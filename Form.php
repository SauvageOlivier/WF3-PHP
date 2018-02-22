<?php

// ----Formulaires_____

echo '

<form method="POST" action="contact.php">
    <label for="id_civilite">Civilité :</label>
    <select id="id_civilite" name="civilite">
        <option value="Madame">Madame</option>
        <option value="Monsieur">Monsieur</option>
    </select>
    <br><br>
    <label for="id_pseudo">Pseudo : </label>
    <input type="text" id="id_pseudo" name="pseudo" />
    <br><br>
    <label for="id_contenu">Commentaire :</label>
    <textarea id="id_contenu "name="contenu"></textarea>
    <br><br>
    <label for="id_email">email :</label>
    <input type="text" id="id_email" name="email" />
    <br><br>
    <button type="submit">Envoyé</button>
</form>

';

?>