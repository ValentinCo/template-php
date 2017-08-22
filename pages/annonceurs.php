
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
include ("template/default.php")
?>

<?php
$reponse = $bdd->query('SELECT * FROM users');
?>
<?php
while  ($donnees = $reponse->fetch()){
?>
<p>
    <strong>Annonceur</strong> : <?php echo $donnees['first_name'] . " ",
$donnees['last_name'];
?>
</p>
    <?php
}

?>
