
	 <!-- Formulario -->
	 <div> 
      <form name="form" method="POST" action="include/inc_cliente.php">
	   <div class="row">
    <div class="col-sm-4">
      <div class="form-group">
    <label for="exampleInputPassword1">Nombre</label>
    <input type="text" name="nombre" class="form-control">
  </div>	
    </div>
    <div class="col-sm-4">
     <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" name="apellido" class="form-control">
  </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" name="email" class="form-control">
  </div> 
    </div>
  </div>

	
  <div class="row">
        <div class="col-sm-4">
      <div class="form-group">
    <label for="exampleInputPassword1">Sexo</label><br>
    <input type="radio" name="sexo" value="M">Masculino<br>
  <input type="radio" name="sexo" value="F">Femenino<br>
  
  </div>	
   
    </div>
    <div class="col-sm-4">
      <div class="form-group">
    <label for="exampleInputPassword1">Dni</label>
    <input type="text" name="dni" class="form-control" >
  </div>	
    </div>
    <div class="col-xs-4">
		<div class="form-group">
		<label for="exampleInputEmail1">Fecha de nacimiento</label><br>
			<input type="date" name="fechaNacimiento" max="2010-12-31">
		</div>	
	</div>
</div>
	   <div class="row">

    <div class="col-sm-4">
     
    <div class="form-group">
    <label for="exampleInputPassword1">Teléfono</label>
    <input type="text" name="telefono" class="form-control" >
  </div>	
  </div>
    
    <div class="col-sm-4">
  
    &nbsp;
  
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>