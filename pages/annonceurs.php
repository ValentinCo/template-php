
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
$reponse = $bdd->query('SELECT * FROM uti_utilisateur');
?>

<div class="container">
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>N°</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Age</th>
        <th>E-mail</th>
        <th>Pseudo</th>

        
      </tr>
    </thead>


<?php
while  ($donnees = $reponse->fetch()){
?>
<p>
<td><?=$donnees['uti_oid']?> </td>
<td><?=$donnees['uti_prenom']?> </td>
<td><?=$donnees['uti_nom']?> </td>
<td><?=$donnees['uti_age']. " ans";?> </td>
<td><?=$donnees['uti_email']?> </td>
<td><?=$donnees['uti_pseudo']?> </td>
</tr>
</tbody>

</div>
</p>

</p>
    <?php
}

?>
