<?php
/**
 *
 * @package  Project PW - Université Rennes 1
 * @authors  Diana Silva - Maykol Hernandez
 * @link     - https://bepbep.herokuapp.com/
 *
 */

 //Ce fichier contient le formulaire pour créer les utilisateurs

require_once '../mod/header.php';
require_once '../mod/menu3.php';
?>
  <br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Ouvrez un nouveau compte</h3>
          </div>
			  	<div class="panel-body">
			    	<form action="signinvalidation.php" accept-charset="UTF-8" role="form" method="POST" name="formSignIn" onsubmit="return ValidateFormSignIn()">
              <fieldset>
			    	  	<div class="form-group">
                  <label for="user">Adresse email :</label>
			    		    <input class="form-control" placeholder="Cette addresse mail vous permettra de vous enregistrer" name="user" type="text" id="textValidReg" value="<?php echo $_GET['user'] ?>" required/>
                </div>
                <div class="form-group">
                  <label for="password">Créez un mot de passe :</label>
                  <input class="form-control" placeholder="Entre 8 et 10 caracteres (minimum une majuscule, une chiffre et un caracter spécial)" name="password" type="password" value="" required>
                </div>
                <div class="form-group">
                  <label for="password2">Confirmez votre mot de passe :</label>
			    			  <input class="form-control" placeholder="Saisissez le mot de passe à nouveau" name="password2" type="password" value="" required>
                </div>
                <div class="ratio">
                  <label for="civilite">Civilit&eacute; :</label>
                  <input type="radio" name="civilite" value="Mme"/>Mme
                  <input type="radio" name="civilite" value="Mr"/>Mr<br>
                  </label>
			    	    </div>
                <div class="form-group">
                  <label for="prenom">Pr&eacute;nom :</label>
                  <input class="form-control" placeholder="Pr&eacute;nom" name="prenom" type="text" value="<?php echo $_GET['prenom'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="nom">Nom :</label>
                  <input class="form-control" placeholder="Nom de famille" name="nom" type="text" value="<?php echo $_GET['nom'] ?>" required>
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-block">Ouvrez votre compte</button>
                </div>

              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  // Ce script verifie les champes du formulaire
    var formulaire = document.getElementsByName("formSignIn")[0];
    function ValidateFormSignIn() {
      var filter=/^.+@.+\..{2,3}$/;
      if (formulaire.user.value.length == 0 || !formulaire.user.value.match(new RegExp(filter))) {
       alert("Veuillez entrer une addresse mail valide");
       return false;
      }

      filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,10}$/;
      if (formulaire.password.value.length == 0 || !formulaire.password.value.match(new RegExp(filter))) {
       alert("Votre mot de passe doit comporter entre 8 et 10 caractères, se composer de chiffres et de lettres et comprendre des majuscules/minuscules et des caractères spéciaux.");
       return false;
      }

      if (formulaire.password.value != formulaire.password2.value) {
       alert("Les mots de passes ne coincident pas");
       return false;
      }

      filter = /^[A-Za-zƒŠŒŽšœžŸÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèé êëìíîïðñòóôõöøùúûüýþÿ]*$/;
      if (formulaire.prenom.value.length == 0 || !formulaire.prenom.value.match(new RegExp(filter))) {
       alert("Veuillez entrer un prénom valide");
       return false;
      }
      if (formulaire.nom.value.length == 0 || !formulaire.nom.value.match(new RegExp(filter))) {
       alert("Veuillez entrer un nom valide");
       return false;
      }
      return true;
    }
  </script>


  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <script>
<?php
  if (!empty($_GET['msjctrl'])) {
      if ($_GET['msjctrl'] == 1) {
        ?> alert("Veuillez saisir un login et un mot de passe") <?php
          //echo "Veuillez saisir un login et un mot de passe";
      } if ($_GET['msjctrl'] == 2) {
        ?> alert("Veuillez saisir un autre nom d'utilisateur") <?php
          //echo "Veuillez saisir un autre nom d'utilisateur";
  }
}
//<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.7450811361587!2d-1.6405683492009628!3d48.11515306060016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edee4490f4333%3A0x3c4238e97734ee99!2sISTIC!5e0!3m2!1sfr!2sfr!4v1484347336830" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>

?>
</script>
<?php
require_once '../mod/footer.php';
?>
