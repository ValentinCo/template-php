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


<button type="button" class="btn btn-primary" data-toggle="modal"
data-target="#exampleModal" data-whatever="@mdo">Inscription</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="?p=inscription">
          <div class="form-group">
            <label for="prenom" class="form-control-label">Prenom:</label>
            <input name="prenom" type="text" class="form-control" id="prenom" required>
          </div>
          <div class="form-group">
            <label for="nom" class="form-control-label">Nom:</label>
            <input name="nom" type="text" class="form-control" id="nom" required>
          </div>
          <div class="form-group">
            <label for="age" class="form-control-label">Age:</label>
            <input name="age" type="number" class="form-control" id="age" required>
          </div>
          <div class="form-group">
            <label for="pseudo" class="form-control-label">Pseudo:</label>
            <input name="pseudo" type="text" class="form-control" id="pseudo" required>
          </div>
          <div class="form-group">
    <label for="inputEmail" class="control-label">Email</label>
    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="control-label">Password</label>
    <div class="form-inline row">
      <div class="form-group col-sm-6">
        <input name="password1" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Mot de passe" required>
        <div class="help-block">Minimum 8 caractères</div>
      </div>
      <div class="form-group col-sm-6">
        <input name="password2" type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirmation" required>
        <div class="help-block with-errors"></div>
      </div>
    </div>
  </div>

          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button name="valider" type="submit" class="btn btn-primary">Valider</button>
      </div>
    </div>
  </div>
</div>
</form>

