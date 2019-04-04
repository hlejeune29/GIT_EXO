<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Minichat</title>
    </head>

    <body>
        <form method="post" action="minichat_post.php">
        <p>Pour pouvoir entrer sur le site sécurisée, vous devez entrer vos identifiants</p>
        <P>Pseudo : <input type="string" name="pseudo"/></P>
        <p>Message : <input type="string" name="message"/></p>
        <p><input type="submit" value="Envoyer"></P>
    </body>
</html>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	$reponse = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 10');
	while ($donnees = $reponse->fetch())
	{
		echo '<p><Strong>' . $donnees['pseudo'] . '</strong> : ' . $donnees['message'] . '</p>';
	}
?>
