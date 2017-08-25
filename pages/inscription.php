<?php


    //Lance la bdd 'dbname=Nom de la bdd' 'root = nom utilisateur' 'admin= mdp'
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$age = $_POST['age'];

$bdd->query('INSERT INTO uti_utilisateur (uti_prenom, uti_nom, uti_age) 
VALUES ("'.$prenom.'","'.$nom.'","'.$age.'")');
?>