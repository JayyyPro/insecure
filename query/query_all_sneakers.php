<?php
include_once('../database/db.inc.php');
include_once('../sneaker.class.php');

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=$db_name", $user, $pass);
    $sql = "SELECT logo_carte, nom_carte, prix FROM `sneakers` WHERE 1";

    $reponse = $bdd->query($sql);
    $sneaker = $reponse->fetchAll();

    foreach ($sneaker as $ligne) 
	{
		$sneaker = new Sneaker($ligne['logo_carte'], $ligne['nom_carte'], $ligne['prix']);
        echo $sneaker->printHTML();
    }
}
catch(PDOException $err)
{
    echo "Erreur : " . $e->getMessage() . "<br>";
    die();
}
?>