<?php
/**
 *
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 *
 */
$archivo = "mod/contador.txt"; 
$contador = 0; 

$fp = fopen($archivo,"r"); 
$contador = fgets($fp, 26); 
fclose($fp); 

++$contador; 

$fp = fopen($archivo,"w+"); 
fwrite($fp, $contador, 26); 
fclose($fp); 

echo "Esta página ha sido visitada $contador veces"; 


/*</body>
</html>

<center>
<?
//asigno el archivo a la variable $maestro
$maestro = fopen("./contador/contador.txt","r+");

//leo la primera linea y se la asigno a $leer
$leer = fgets($maestro,10);

//incremento la variable $leer en uno
if (isset($_COOKIE['tuwebcontador']))
{
}else{
++$leer;
setcookie("tuwebcontador", "1", time() + 3600); 
}

//rebobino el archivo para poder sobre escribir su contenido
rewind($maestro);

//sobreescribo el contenido
fputs($maestro,$leer);

//cierro el archivo de texto
fclose($maestro);

//muestro en pantalla el valor acutal del archivo
echo "Sos el visitante N°: $leer";
?>

</center>*/
?>