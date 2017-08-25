
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
$reponse = $bdd->query('SELECT * FROM rub_rubrique');
?>

<div class="container">
    <table class="table table-bordered">
        <thead>
    <tr>
        <th>N°</th>
        <th>Rubrique</th>
    </tr>
    </thead>

<?php
while  ($donnees = $reponse->fetch()){
?>
<p>
<td><?=$donnees['rub_oid']?></td>
<td><?=$donnees['rub_label'];?> </td>
</tr>
</tbody>
</div>
</p>
    <?php
}
$reponse->closeCursor();
?>