<?php
/**
 *
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 *
 */ 

require('config.php');
require('bepbep_coreClass');

if (!empty($_GET['afaire']) && $_GET['afaire']=='deconnexion') {
    session_start();
    unset($_SESSION);
    /*$datos_cookie = session_get_cookie_params();
    setcookie(session_name(), NULL, time()-999999, $datos_cookie["path"],
          $datos_cookie["domain"], $datos_cookie["secure"],
          $datos_cookie["httponly"]);*/
    session_destroy();
    //header('Location:login.php?error=3');
    echo 'Vous avez bien été déconnecté du service';
}
elseif(empty($_POST['name']) || empty($_POST['password'])) {
    //header('Location:index.php?error=1', false);
    echo 'Veuillez saisir un login et un mot de passe';
}
else {
    $name = $_POST['name'];
    $password = $_POST['password'];
    if($name == LEBONLOGIN && $password == LEBONPASS) {
        //session_start();
        //$_SESSION['CONNECT']='OK';
        //$_SESSION['NAME']=$name;
        //$_SESSION['PASSWORD']=$password;;
        //header('Location:accueil.php');
        echo 'usuario y contraseña correctos';
    } else {
        echo 'Erreur de login/mot de passe';
	//header('Location:login.php?error=2');
    }
}
?>