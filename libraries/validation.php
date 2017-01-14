<?php
/**
 *
 * @package  Projet PW - Université Rennes 1
 * @authors  Diana Silva - Maykol Hernandez
 * @link     - https://bepbep.herokuapp.com/
 *
 */

require_once 'functions.php';

// Verificacion de desconexion de session
if (!empty($_GET['afaire']) && $_GET['afaire']=='deconnexion') {
    session_start();
    unset($_SESSION);
    $datos_cookie = session_get_cookie_params();
    setcookie(session_name(), NULL, time()-999999, $datos_cookie["path"],
          $datos_cookie["domain"], $datos_cookie["secure"],
          $datos_cookie["httponly"]);
    session_destroy();
    //header('Location:http://192.168.1.82/~mako/PW_projet/?error=3');
    header('Location: ../?msjctrl=3');
}
// Verificacion si variables estan vacias
else if(empty($_POST['user']) || empty($_POST['password'])) {
    //header('Location:http://192.168.1.82/~mako/PW_projet/?error=1', false);
    header('Location: ../?msjctrl=1');
    //echo 'Veuillez saisir un login et un mot de passe';
}
else{

  if(login($_POST['user'], $_POST['password'])) {
    header('Location:home.php');
  }
  else {
    //header('Location:http://192.168.1.82/~mako/PW_projet/?error=2');
    header('Location: ../?msjctrl=2');
  }
}
?>
