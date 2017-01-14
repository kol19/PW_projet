<?php
/**
 *
 *
 * @package  ...
 * @author   ...
 * @license  ...
 * @link     https://
 *
 */

 // Ce fichier gère les requets de la table users de la base de données

 // Fonction pour ajouter les commandes à la base de donnés
    function addRequest($description,$priority,$service,$zipcode,$file) {

      session_start();
      $connect = new Tools();
      $cons='INSERT INTO requests(id_client, description, priority, service_type, zip_code, file) VALUES ("'.$_SESSION['ID'].'","'.$description.'","'.$priority.'","'.$service.'","'.$zipcode.'","'.$file.'")';
      echo $cons;
      $connect->consultaDB($cons);
    }

    // Fonction pour verifier si un username existe deja. true s'il existe
    function getCommandes($id) {
      $connect = new Tools();
      $result = $connect->consultaDB('SELECT description, priority, service_type, zip_code, file, request_date FROM requests WHERE id_client="'.$id.'"');

return $result;


    }

?>
