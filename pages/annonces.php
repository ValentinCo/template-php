
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
$reponse = $bdd->query('SELECT * FROM adverts');
?>
<?php
while  ($donnees = $reponse->fetch()){
?>
<p>
    <strong>Annonce</strong> : <?php echo $donnees['title'] . " ",
$donnees['price'] ." " . "€ ",
$donnees["description"];
?>
</p>
    <?php
}
$reponse->closeCursor();
?>


