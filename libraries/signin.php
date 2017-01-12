<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Create a new account</h3>
          </div>
			  	<div class="panel-body">
			    	<form action = "signinvalidation.php" accept-charset="UTF-8" role="form" method="POST">
              <fieldset>
			    	  	<div class="form-group">
                  <label for="user">Email address:</label>
			    		    <input class="form-control" placeholder="This will be your sign in email address." name="user" type="text" id="textValidReg"/>
                </div>
                <div class="form-group">
                  <label for="password">Create password:</label>
                  <input class="form-control" placeholder="8 chiffres" name="password" type="password" value="">
                </div>
                <div class="form-group">
                  <label for="password2">Confirm your password:</label>
			    			  <input class="form-control" placeholder="Enter password again" name="password2" type="password" value="">
                </div>
                <div class="ratio">
                  <label for="civilite">Civilit&eacute;:</label>
                  <input type="radio" name="civilite" valeu="Mme"/>Mme
                  <input type="radio" name="civilite" value="Mr"/>Mr<br>
                  </label>
			    	    </div>
                <div class="form-group">
                  <label for="prenom">Pr&eacute;nom:</label>
                  <input class="form-control" placeholder="Pr&eacute;nom" name="prenom" type="text" value="">
                </div>
                <div class="form-group">
                  <label for="nom">Nom:</label>
                  <input class="form-control" placeholder="Nom" name="nom" type="text" value="">
                </div>
                <div class="checkbox">
			    	    	<label>
                  <input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
                <input class="btn btn-lg btn-success btn-block" type="submit" value="Create your account" onclick="ValidarCadenaExpReg()">
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function ValidarCadenaExpReg() {
        // Expresion regular que representa un Email válido
        cadena = "^[a-z]+@[a-z]+\.[a-z]{2,4}$";
        re = new RegExp(cadena);

        if (document.getElementById("textValidReg").value.match(re))
            alert("Aceptado");
        else
            alert("Email incorrecto");
    }
  </script>

  <script>
    $(document).ready(function(){
      $('#characterLeft').text('140 characters left');
      $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        }
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });
});
  </script>
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
