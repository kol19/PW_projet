<?php
/**
 *
 * @package  Project PW - Université Rennes 1
 * @authors  Diana Silva - Maykol Hernandez
 * @link     - https://bepbep.herokuapp.com/
 *
 */

 //Fonction pour envoyer les mails
if(isset($_POST['email'])) {

    // Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados

    $email_to = "dicasizak@gmail.com";

    $email_subject = "BepBep issue";

    function died($error) {

        // si hay algún error, el formulario puede desplegar su mensaje de aviso

        echo "Warning, Desole le mail ne peut pas etre envoyé";

        echo "Detail.<br /><br />";

        echo $error."<br /><br />";

        echo "S'il vous plaît corrigez les erreurs et essayez à nouveau.<br /><br />";
        die();
    }

    // Se valida que los campos del formulairo estén llenos

    if(!isset($_POST['first_name']) ||

        !isset($_POST['last_name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['telephone']) ||

        !isset($_POST['message'])) {

        died('Désolé, mais il semble avoir un problème avec les données envoyées.');

    }
 //En esta parte el valor "name" nos sirve para crear las variables que recolectaran la información de cada campo

    $first_name = $_POST['first_name']; // requerido

    $last_name = $_POST['last_name']; // requerido

    $email_from = $_POST['email']; // requerido

    $telephone = $_POST['telephone']; // no requerido

    $message = $_POST['message']; // requerido

    $error_message = "Error";

//En esta parte se verifica que la dirección de correo sea válida

   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {

    $error_message .= 'Ladresse de courrier nest pas valide.<br />';

  }

//En esta parte se validan las cadenas de texto

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {

    $error_message .= 'Le format du prenom est invalide<br />';

  }

  if(!preg_match($string_exp,$last_name)) {

    $error_message .= 'Le format du nom est invalide.<br />';

  }

  if(strlen($message) < 2) {

    $error_message .= 'Le format de texte est invalide.<br />';

  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

//A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo

    $email_message = "Message.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Nombre: ".clean_string($first_name)."\n";

    $email_message .= "Apellido: ".clean_string($last_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Teléfono: ".clean_string($telephone)."\n";

    $email_message .= "Mensaje: ".clean_string($message)."\n";


//Se crean los encabezados del correo

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);

?>



<!-- incluye aqui tu propio mensaje de Éxito-->
Merci! Nous prendrons contact avec vous:


<?php

}

?>
