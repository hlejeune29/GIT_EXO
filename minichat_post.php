<?php
//if (isset($_['console']))
{
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	$requete = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(:pseudo, :message)');
	$requete->execute(array('pseudo' => $_POST['pseudo'], 'message' => $_POST['message']));
}
header('Location: minichat.php');
?>
