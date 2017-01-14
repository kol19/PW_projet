<?php
/**
 *
 * @package  Projet PW - Université Rennes 1
 * @authors  Diana Silva - Maykol Hernandez
 * @link     - https://bepbep.herokuapp.com/
 *
 */

 // Ce fichier contient la page "contact"

require_once 'functions.php';
session_start();
if($_SESSION['CONNECT']=='OK') {
  if (!empty($_GET['msjctrl'])) {
    if ($_GET['msjctrl'] == 1) {
      ?> <script>alert("Votre compte a été créé")</script> <br><?php
    }
  }
    }
else {
    header('Location: ../');
    }
?>


  <?php
  require_once '../mod/header.php';
  require_once '../mod/menu2.php';
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Faites votre commande:</h3>
          </div>
			  	<div class="panel-body">
			    	<form action="requestvalidation.php" accept-charset="UTF-8" role="form" method="POST" name="formRequest" >
              <fieldset>
                <div class="form-group">
                  <textarea class="form-control" rows="4" cols="50" placeholder="D&eacute;crivez le service souhaité en utilisant 200 caract&#232;res..." name="description" onKeyDown="valida_longitud()" onKeyUp="valida_longitud()" required></textarea>
                  <input type="text" name=caracteres size=2/>
                </div>

                <div class="form-group">
                  <label for="priority" name="priority">Priorit&eacute;:</label>
                  <br><input type="radio" name="priority" value="haute" required /> &nbsp;Haute
                  <br><input type="radio" name="priority" value="normale" required /> &nbsp;Normale
                  <br><input type="radio" name="priority" value="basse" required /> &nbsp;Basse<br>
                  </label>
                </div>

                <div class="form-group">
                  <label for="priorite">Type de service:</label>
                  <select name="service" size="1" class="form-control">
                    <option value="Restauration">Restauration</option>
                    <option value="Cours">Cours</option>
                    <option value="Personnel">Personnel</option>
                    <option value="Autres">Autres</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="user">Code postale de la commande:</label>
			    		    <input class="form-control" placeholder="Ex. 35000" name="zipcode" type="text" required/>
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                </div>

              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    <form action="subearchivo.php" method="post" enctype="multipart/form-data">
      <b>Campo de tipo texto:</b>
      <br>
      <input type="text" name="cadenatexto" size="20" maxlength="100">
      <input type="hidden" name="MAX_FILE_SIZE" value="100000">
      <br>
      <br>
      <b>Enviar un nuevo archivo: </b>
      <br>
      <input name="userfile" type="file">
      <br>
      <input type="submit" value="Enviar">
  </form>

  <script>
  contenido_textarea = ""
  num_caracteres_permitidos = 200

  function valida_longitud(){
     num_caracteres = document.forms[0].description.value.length

     if (num_caracteres > num_caracteres_permitidos){
        document.forms[0].description.value = contenido_textarea
     }else{
        contenido_textarea = document.forms[0].description.value
     }

     if (num_caracteres >= num_caracteres_permitidos){
        document.forms[0].caracteres.style.color="#ff0000";
     }else{
        document.forms[0].caracteres.style.color="#000000";
     }

     cuenta()
  }
  function cuenta(){
     document.forms[0].caracteres.value = num_caracteres_permitidos - document.forms[0].description.value.length
  }
  </script>

    <script>
      var formulaire = document.getElementsByName("formSignIn")[0];
      function ValidateFormSignIn() {
        var filter=/^.+@.+\..{2,3}$/;
      }
        </script>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>

<script>

  <?php
    if (!empty($_GET['msjctrl'])) {
        if ($_GET['msjctrl'] == 3) {
          ?> alert("Veuillez remplir tous les champs") <?php
            //echo "Veuillez saisir un login et un mot de passe";
        }
        if ($_GET['msjctrl'] == 2) {
          ?> alert('La commande a été ajoutée') <?php
            //echo "Veuillez saisir un autre nom d'utilisateur";
    }
    if ($_GET['msjctrl'] == 4) {
      ?> alert("Cantidad maxima de caracteres superada") <?php
        //echo "Veuillez saisir un login et un mot de passe";
    }
  }

  //<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.7450811361587!2d-1.6405683492009628!3d48.11515306060016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edee4490f4333%3A0x3c4238e97734ee99!2sISTIC!5e0!3m2!1sfr!2sfr!4v1484347336830" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>

  ?>
</script>
<?php
require_once '../mod/footer.php';
?>
