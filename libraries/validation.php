<?php
/**
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 */

require_once 'functions.php';

// Verificacion de desconexion de sesion
if (!empty($_GET['afaire']) && $_GET['afaire']=='deconnexion') {
    session_start();
    unset($_SESSION);
    $datos_cookie = session_get_cookie_params();
    setcookie(session_name(), NULL, time()-999999, $datos_cookie["path"],
          $datos_cookie["domain"], $datos_cookie["secure"],
          $datos_cookie["httponly"]);
    session_destroy();
    header('Location:http://192.168.1.82/~mako/PW_projet/?error=3');
}
// Verificacion si variables estan vacias
else if(empty($_POST['user']) || empty($_POST['password'])) {
    header('Location:http://192.168.1.82/~mako/PW_projet/?error=1', false);
    //echo 'Veuillez saisir un login et un mot de passe';
}
else{

  if(login($_POST['user'], $_POST['password'])) {
    header('Location:accueil.php');
  }
  else {
    header('Location:http://192.168.1.82/~mako/PW_projet/?error=2');
  }
}
?>
