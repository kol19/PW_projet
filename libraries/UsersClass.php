<?php
/*
INSERT INTO user (username, password, first_name, last_name, tel, email)
                        VALUES ('admin', 'admin', 'admin_fist_name', 'admin_last_name', 0000000000, 'admin@bepbep.com');
                        
                        
                        

CREATE TABLE usuarios_login(
usuario varchar(30) PRIMARY KEY,
contrasena varchar(40),
metodo varchar(5)
);

INSERT INTO `usuarios_login` (`usuario`, `contrasena`, `metodo`) 
  VALUES ('fulanito', MD5('contrafulanito'), 'md5');
INSERT INTO `usuarios_login` (`usuario`, `contrasena`, `metodo`) 
  VALUES ('periquito', SHA1('contraperiquito1'), 'sha1');
INSERT INTO `usuarios_login` (`usuario`, `contrasena`, `metodo`)
  VALUES ('profesor', 'contraprofe', 'texto');
INSERT INTO `usuarios_login` (`usuario`, `contrasena`, `metodo`)
  VALUES ('guirado', SHA1('pedr1t0'), 'sha1');
  
SELECT * FROM usuarios_login WHERE usuario='fulanito' AND contrasena=MD5('contrafulanito');
SELECT * FROM usuarios_login WHERE usuario='guirado' AND contrasena=SHA1('pedr1t0');
*/

include_once 'functions.php';
/**
 * Esta clase contiene las funciones necesarias para gestionar la tabla users de la base de datos
 * 
 * @package  ...
 * @author   ...
 * @license  ...
 * @link     https://
 *
 */
 
 class usersClass{
     
     /**
     * Devuelve un array con la información de una fila a partir de un ID
     * @return type
     */
    
    function getData(){
        //Creamos la consulta
        $sql = "SELECT * FROM table1 WHERE ID = $this->ID;";
        //obtenemos el array
        $tool = new Tools();
        $array = $tool->getArraySQL($sql);
        return $array;
    }
    
}