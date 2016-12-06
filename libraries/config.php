<?php
/**
 *
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 *
 */

define('LEBONLOGIN', 'crepo');
define('LEBONPASS', 'nutella');

/**
 *
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 *
 */
$server = 'mysql';
$host = 'localhost';
//$base = 'bepbep_core';
$base = 'PW_TP3';
$user = 'root';
$passwd = 'root';

/*
$server = 'mysql';
$host = 'mysql.istic.univ-rennes1.fr';
$base = 'base_17010715';
$user = 'user_17010715';
$passwd = 'testtest';*/

//OTROS DATOS
define("DEBUG","true");

/*
$server = 'mysql';
$host = 'mysql.istic.univ-rennes1.fr';
$base = 'base_17010715';
$user = 'user_17010715';
$passwd = 'testtest';

$server = 'mysql';
$host = 'localhost';
$base = 'PW_TP3';
$user = 'root';
$passwd = 'root';


CREATE TABLE PERS
(
id INT PRIMARY KEY NOT NULL,
nom VARCHAR(100),
num_serv INT
)

INSERT INTO PERS (nom, num_serv)
	VALUES ('Armand', 1001),
     ('Hebert', 1002),
     ('Ribeiro', 1003),
     ('Savary', 1004);
	 
SELECT * FROM `PERS` 

site internet visible http://miage2.webglazik.net
Hote FTP 178.33.106.141
Port 21
Repertoire /home/webglazik.net/miage2
nom BDD/user: webglazik_miage2
user/pass: miage2/fraise12


http://oracle.istic.univ-rennes1.fr/
https://perso.univ-rennes1.fr/virginie.sans/L3Miage/

<?php
$usuario='root';
$password='root';
try{
    $conn = new PDO('mysql:host=localhost;dbname=PW_TP3', $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo "ERROR: " . $e->getMessage();
}
?>
http://www.taringa.net/post/hazlo-tu-mismo/10587296/Crear-base-de-datos-en-MySQL-registro-de-usuarios.html
http://mysql.conclase.net/curso/?cap=007#

*/
?>

