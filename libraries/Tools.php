<?php


/**
  * Cette classe contient les fonctions pour la fontionnalité du site web
  *
  * @package  Projet PW - Université Rennes 1
  * @authors  Diana Silva - Maykol Hernandez
  * @link     - https://bepbep.herokuapp.com/
  *
  */

  //Cette class est utilisée pour gérer les connexions à la base de données

class Tools{


     function connectDB(){
      include('config.php');
      $conexion = mysqli_connect($host, $user, $passwd, $base);
      //$conexion = mysqli_connect("mysql.istic.univ-rennes1.fr", "user_17010715", "testtest", "base_17010715");
        //$conexion = mysqli_connect("localhost", "root", "root", "bepbep_core");
        //$conexion = mysqli_connect($host, $user, $passwd, $base);
        if (mysqli_connect_errno()) {
          ?><script> alert("Failed to connect to MySQL: <?php echo mysqli_connect_error() ?>");</script><?php
          //header('Location: ../');
            //echo "Failed to connect to MySQL: " . mysqli_connect_error()."<br>";
            return false;
        }
        else {
            //echo 'Connexion réussie<br>';
            return $conexion;
        }
        //mysqli_query ($conexion,"SET NAMES 'utf8'");
        //mysqli_set_charset($conexion, "utf8");
        //return $conexion;
        /*try {
            $db = new PDO("$server:host=$host;dbname=$base", $user, $passwd);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion OK</br></br>";
        } catch (PDOException $e) {
            //die("Impossible de se connecter à la base de données ...");
            echo "ERROR: " . $e->getMessage()."</br></br></br>";
        }*/
    }

    //Fonction de desconnexion de la base de données
    function disconnectDB($conexion){
        $close = mysqli_close($conexion);
        if (!$close) {
            die('desconexion impossible : ' . mysql_error())."<br>";
        }
        //echo 'Desconnexion réussie<br>';
        return close;
    }

    //Fonction pour tester les requetes à la base de données
    function consulta() {
        $conn = $this->connectDB();
        $sql = ('SELECT username FROM users');
        $result = $conn->query($sql);

        $this->disconnectDB($conn);
        return $result;
    }
    //Fonction pour faire les requetes à la base de données
    function consultaDB($consulta) {
        $conn = $this->connectDB();
        $sql = ($consulta);
        $result = $conn->query($sql);

        $this->disconnectDB($conn);
        return $result;
    }
}

?>
