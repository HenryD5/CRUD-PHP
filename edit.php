<?php require 'header.php' ;
require 'conexion.php';
$id = $_GET['id'];
$consulta = "SELECT * FROM clientes where id = $id" ;
$resultados = $oConex -> prepare($consulta);

//ejecutar
$resultados -> execute();
$fila = $resultados -> fetch(PDO::FETCH_OBJ) ;
?>

    <div class="container">

     <div class="card mt-5">
       <div class="card-header">
         <h2>Actualizar Cliente</h2>
       </div>
       <div class="card-body">
         <form method ="get" action="update.php">
         <input type="text"  value ="<?=$fila->id?>" name="id" style="visibility:hidden">
           <div class="form-group">
              <label for="nombres">Nombre</label>
<input  value ="<?=$fila->nombres?>" type="text" name="nombres" id="nombres" class="form-control">
           </div>
           <div class="form-group">
              <label for="apellidos">Apellidos</label>
              <input value ="<?=$fila->apellidos?>" type="text" name="apellidos" id="apellidos" class="form-control">
           </div>
           <div class="form-group">
           <label for="sexo">Sexo</label>
           <input value ="<?=$fila->sexo?>"id="sexo" name="sexo" for ="sexo" class="form-control">
           </div>
           <div class="form-group">
              <button  type="submit" class="btn btn-info">Actualizar</button>
           </div>
         </form>
       </div>
     </div>
    </div>

<?php require 'footer.php' ; ?>