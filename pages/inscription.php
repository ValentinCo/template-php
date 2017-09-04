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
$pseudo = htmlspecialchars($_POST['pseudo']);
$email = htmlspecialchars($_POST['email']);
$password1 = htmlspecialchars($_POST['password1']);
$password2 = htmlspecialchars($_POST['password2']);

if ($_POST["password1"] === $_POST["password2"]) {
    // success!
 }
 else {
    echo "Mauvais mot de passe";
 }



// $bdd->query('INSERT INTO uti_utilisateur (uti_prenom, uti_nom, uti_age) 
// VALUES ("'.$prenom.'","'.$nom.'","'.$age.'")');

$sql = sprintf('INSERT INTO uti_utilisateur (uti_prenom, uti_nom, uti_age, uti_pseudo, uti_email, uti_password) 
VALUES ("'.$prenom.'","'.$nom.'","'.$age.'", "'.$pseudo.'","'.$email.'","'.$password.'")');

$reponse = $bdd->query($sql);

?>

<h3>Vous êtes inscrit</h3>