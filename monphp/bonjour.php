<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bonjour</title>
    </head>
    <body>
        <p>Merci de me dire qui tu es :</p>
    <form method="post" action="login.php"/>
            <label>Ton pseudo :</label><input type="text" name="pseudo"><br/>
            <label>Ton univers :</label><input type="text" name="univers"><br/>
            <input type="submit" value="Valider"/>

    </form>
  
    </body>
</html>
