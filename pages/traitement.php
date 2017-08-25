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

$nom = $_GET['nom'];
// $prenom = $_GET['prenom'];

// $reponse = $bdd->query("SELECT * FROM uti_utilisateur WHERE uti_nom
// LIKE '%" .$nom . "%' AND uti_prenom LIKE '%" .$prenom. "%'");

// $sql= sprintf("SELECT * FROM uti_utilisateur 
// WHERE uti_nom = '%s' ", $nom);

$sql= sprintf("SELECT * FROM uti_utilisateur 
WHERE uti_nom LIKE '%%%s%%' OR uti_prenom LIKE '%%%s%%' OR uti_age LIKE '%%%d%%' ", $nom, $nom, $nom);

$reponse= $bdd->query($sql);

while($donnees = $reponse->fetch()){
?>
<p><?= $donnees['uti_prenom'] ." ". $donnees['uti_nom']  ?> </p>
<?php
}
$reponse->closeCursor();
?>


