<?php require 'header.php' ; ?>

    <div class="container">

     <div class="card mt-5">
       <div class="card-header">
         <h2>Registrar Cliente</h2>
       </div>
       <div class="card-body">
         <form method ="post" action="insertar.php">
           <div class="form-group">
              <label for="nombres">Nombre</label>
              <input type="text" name="nombres" id="nombres" class="form-control">
           </div>
           <div class="form-group">
              <label for="apellidos">Apellidos</label>
              <input type="text" name="apellidos" id="apellidos" class="form-control">
           </div>
           <div class="form-group">
           <label for="sexo">Sexo</label>
           <select id="sexo" name="sexo" for ="sexo" class="form-control">
              <option selected>Sexo</option>
              <option value="M">M</option>
              <option value="F">F</option>
           </select>
           </div>
           <div class="form-group">
              <button type="submit" class="btn btn-info">Registrar</button>
           </div>
         </form>
       </div>
     </div>
    </div>

<?php require 'footer.php' ; ?>