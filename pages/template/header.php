<nav class="test navbar navbar-inverse">  
<div class="container-fluid">

    <div class="navbar-header">
    
    </div>
    <ul class="nav navbar-nav">
      <li><a href="?p=home">Accueil</a></li>
      <li><a href="?p=annonceurs">Liste Annonceurs</a></li>
      <li><a href="?p=rubriques">Liste Rubriques</a></li>
      <li><a href="?p=annonces">Liste Annonces</a></li>
      <li><a href="?p=recherche">Recherche</a></li>
    </ul>
</nav>



<!-- requete pour afficher parent, enfant et titre annonce -->


<!-- use annonces_immo;

SELECT rp.rub_label, r.rub_label, a.ann_titre 
FROM rub_rubrique as rp, rub_rubrique as r, ann_annonce as a
where r.rub_oid_parent=rp.rub_oid
and r.rub_oid=a.rub_oid; -->
