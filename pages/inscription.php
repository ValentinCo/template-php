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
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$age = htmlspecialchars($_POST['age']);

// $bdd->query('INSERT INTO uti_utilisateur (uti_prenom, uti_nom, uti_age) 
// VALUES ("'.$prenom.'","'.$nom.'","'.$age.'")');

$sql = sprintf('INSERT INTO uti_utilisateur (uti_prenom, uti_nom, uti_age) 
VALUES ("'.$prenom.'","'.$nom.'","'.$age.'")');

$reponse = $bdd->query($sql);

?>

<h3>Vous êtes inscrit</h3>