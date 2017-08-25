
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
   $reponse = $bdd->query('SELECT ann_oid, rub_label, ann_titre, ann_description, ann_prix, uti_prenom  
   FROM ann_annonce as a, uti_utilisateur as u, rub_rubrique as r
   where a.uti_oid = u.uti_oid
   AND r.rub_oid=a.rub_oid');
?>
<div class="container">
         
  <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>N°</th>
        <th>Rubrique</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Prenom</th>
        
      </tr>
    </thead>


<?php
while  ($donnees = $reponse->fetch()){
?>


<p>
   <td><?=$donnees['ann_oid']?></td>
   <td><?=$donnees['rub_label']?></td>
   <td><?=$donnees["ann_titre"]?></td>
   <td><?=$donnees['ann_description']?></td> 
   <td><?=$donnees['ann_prix']?></td> 
   <td><?=$donnees["uti_prenom"] ?></td>
   </tr>
   </tbody>
 
</div>
    <?php
}
$reponse->closeCursor();
?>
</table>