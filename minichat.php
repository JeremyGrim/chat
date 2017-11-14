<?php

    include "minichat_post.php";





?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <form id="form_minichat" method="POST" action="">
        <label>Pseudo :</label>
        <input type="text" name="pseudo"/>

        <label>Message :</label>
        <textarea name="message"></textarea>

        <input type="submit" value="Envoyer"/>
    </form>

    <?php
        foreach ($postArray as $key => $value) {
            echo "Clé : $key; Valeur : $value<br />\n";
        }
    ?>


</body>
</html>
