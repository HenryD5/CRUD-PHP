<?php

require 'conexion.php';
//consulta

$consulta = "SELECT id, apellidos, nombres, sexo FROM clientes";


$resultados = $oConex -> prepare($consulta ,[PDO::ATTR_CURSOR =>  PDO::CURSOR_SCROLL]);

//ejecutar
$resultados -> execute();
    
/*while ($fila = $resultados -> fetchObject() ){

echo $fila ->id ;
echo $fila -> apellidos;
echo $fila -> nombres;
echo $fila -> sexo . "<br/>";

}*/
?>
<?php require 'header.php' ; ?>
<div class="container">
    <div class="car mt-5d">
        <div class="card-header">
            <h1> Clientes</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>id</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>Sexo</td>
                    <td>Action</td>
                </tr>
                <?php while ($fila = $resultados -> fetchObject() ){ ?>
            
                <tr>
                    <td><?php echo $fila ->id ;?></td>
                    <td><?php echo $fila -> nombres;?></td>
                    <td><?php echo $fila -> apellidos;?></td>
                    <td><?php echo $fila -> sexo . "<br/>";?></td>
                    <td>
                    <a href="edit.php?id=<?=  $fila->id?>" class="btn btn-success">Edit</a>
                    <a onclick="return confirm('Esta seguro de eliminar el registro?')" href="delete.php?id=<?= $fila->id?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>

</div>
<?php require 'footer.php' ; ?>