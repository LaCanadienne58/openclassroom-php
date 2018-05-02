<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['univers'] = $_POST['univers'];


	if (isset ($_POST['pseudo']) AND isset ($_POST['univers']));
	{
	echo ('Bonjour .$_SESSION['pseudo']. 'Bienvenue dans l\'univers .$_SESSION['univers'].);
	}
	else 
	{
	echo ('Identifiants non valides');
	}
?>
<p>Tout d'abord, je t'invite à consulter les <a href="regles.php">règles du jeu</a>.</p> 


 