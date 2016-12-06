<?php
include_once 'functions.php';

/**
 * Clase que contiene funciones útiles sobre la funcionalidad del programa 
 * 
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 *
 */
class Tools{
    /**
     * Devuelve una instancia de la conexión a la base de datos
     * @return type
     */
    function connectDB(){
        $conexion = mysqli_connect("localhost", "root", "root", "bepbep_core");
        //$conexion = mysqli_connect($host, $user, $passwd, $base);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error()."<br>";
        }
        else {
            echo 'Connexion réussie<br>';
        }
        //mysqli_query ($conexion,"SET NAMES 'utf8'");
        //mysqli_set_charset($conexion, "utf8");
        return $conexion;
        /*try {
            $db = new PDO("$server:host=$host;dbname=$base", $user, $passwd);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion OK</br></br>";
        } catch (PDOException $e) {
            //die("Impossible de se connecter à la base de données ...");
            echo "ERROR: " . $e->getMessage()."</br></br></br>";
        }*/
    }
    
    /**
     * Desconecta la base de datos a partir de la instancia que le pasamos
     * @param type $db
     * @return type
     */ 
    function disconnectDB($conexion){
        $close = mysqli_close($conexion);
        if (!$close) {
            die('desconexion impossible : ' . mysql_error())."<br>";
        }
        echo 'Desconnexion réussie<br>';
        return close;
    }
    
    function consulta() {
        $conn = $this->connectDB();
        $sql = ('SELECT username FROM users');
        $result = $conn->query($sql);
        
        $this->disconnectDB($conn);
        return $result;
    }
}

?>