<?php
require_once 'conexion.php';

//variables de nuevos datos

/*if(isset($_POST['nombres']) && isset($_POST['apellidos']) ){
}*/ $message ='';
    $nom = $_POST['nombres'];
    $ape = $_POST['apellidos'];
    $sex = $_POST['sexo'] ;




$consulta = "INSERT INTO clientes(nombres,apellidos,sexo) VALUES(?,?,?)";

//preparacion ejecucion

$sentencia = $oConex ->prepare($consulta);
$resultado = $sentencia -> execute ([$nom, $ape,$sex]);

if($resultado === true){
    header("Location: index.php");
}else{
    echo "Algo anda mal xd";
}

//redireccion