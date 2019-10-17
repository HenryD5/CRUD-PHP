<?php

require_once 'conexion.php';


//datos actualizados de un registro exitente
$id= $_GET['id'];
$nom = $_GET['nombres'];
$ape = $_GET['apellidos'];
$sex = $_GET['sexo'] ;

$consulta="Update clientes Set nombres =? ,apellidos =? , sexo=?  Where id =? ";

//preparacion ejecucion

$sentencia = $oConex ->prepare($consulta);
$resultado = $sentencia -> execute ([$nom, $ape,$sex ,$id]);

if($resultado === true){
    header("Location: index.php");
}else{
    echo "Algo anda mal xd";
}