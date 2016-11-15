<?php
	  	$ResultObject = mysqli_query($SqlLink,"SELECT * FROM cliente");
	
	$ResultArray = array();
	if (!$ResultObject) 
		trigger_error("SQL Query failed: ".mysqli_error($SqlLink),E_USER_ERROR);
	else 
	{
?>
 <h1 align="right"><a href="/clientes.php?accion=agregarCliente">+</a></h3>
<div class="row">
    <div class="col-sm-2" align="center" >
<h3>
    Id
</h3>    
    </div>
    <div class="col-sm-2" align="center">
     
    <h3>
    Nombre
	</h3>
    </div>
	<div class="col-sm-2" align="center">
     
    <h3>
    Apellido
	</h3>

    </div>
	<div class="col-sm-2" align="center">
     
    <h3>
    DNI
	</h3>

    </div>
    <div class="col-sm-2" align="center">
        <h3>
    Email
	</h3>
  </div> 
    
  <div class="col-sm-2" align="center">
      <h3>
   Fecha de nacimiento
	</h3>	
  </div> 

	<?
		while ($obj = $ResultObject->fetch_object())
		{
    ?>
	 
	   <div class="row">
    <div class="col-sm-2" align="center">

    <?php echo $obj->idCliente; ?>
    
		
    </div>
    <div class="col-sm-2" align="center">
     
    <?php echo $obj->nombre; ?>
    </div>
	<div class="col-sm-2" align="center">
     
    <?php echo $obj->apellido; ?>

    </div>
	<div class="col-sm-2" align="center">
     
    <?php echo $obj->dni; ?>

    </div>
    <div class="col-sm-2" align="center">
      <?php echo $obj->email; ?>
  </div> 
    
  <div class="col-sm-2" align="center">
      <?php $date = new DateTime($obj->fechaNacimiento);
			echo date_format($date, 'd/m/Y'); ?>
  </div> 
    
  </div>
		<? }
	}
	 /* liberar el conjunto de resultados */
   	$ResultObject->close();?>
