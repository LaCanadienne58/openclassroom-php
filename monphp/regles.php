<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
$_POST['univers'] = $_SESSION['univers'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Les règles du jeu</title>
    </head>
    <body>
 
    <p>
        Voici les règles du jeu pour l'univers <?php echo $_SESSION['univers']; ?> :
        <ul>
            <li>règle 1</li>
            <li>règle 2</li>
            <li>règle 3</li>
            <li>règle 4</li>
            <li>règle 5</li>
        </ul>
    </p>
    </body>
</html>