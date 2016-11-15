
<!DOCTYPE html>
<html lang="es">    
<?php include "include/inc_head.php"; ?>

  <body>

    <div class="container">

<?php include "include/inc_menu.php"; ?>

      <!-- Formulario -->
	  
<form>
	<div class="container">
		<div class="row">
		<div class="col-xs-6">
		<div class="form-group">
		<label for="exampleInputEmail1">Desde</label><br>
			<input type="datetime-local" name="Desde">
		</div>	
		</div>	
		<div class="col-xs-6">
		<div class="form-group">
		<label for="exampleInputEmail1">Desde</label><br>
			<input type="datetime-local" name="Desde">
		</div> 
		</div>
		</div>
	</div>
	  
	  
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
       <div class="form-group">
    <label for="exampleInputEmail1">Cantidad de habitaciones:</label>
    <label class="form-check-inline">
  <input class="form-check-input" type="radio" name="ctdHabitacionesRadioOptions" id="inlineRadio1" value="option1"> 1
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="ctdHabitacionesRadioOptions" id="inlineRadio2" value="option2"> 2
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="ctdHabitacionesRadioOptions" id="inlineRadio3" value="option3"> 3
</label>
  </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group">
    <label for="exampleInputEmail1">Tipo de inmueble:</label>
    <label class="form-check-inline">
  <input class="form-check-input" type="radio" name="tipoInmuebleRadioOptions" id="inlineRadio1" value="option1"> Departamento
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="tipoInmuebleRadioOptions" id="inlineRadio2" value="option2"> Bungalow
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="tipoInmuebleRadioOptions" id="inlineRadio3" value="option3"> Cabaña
</label>
  </div>
  
    </div>
  </div>
</div>
	
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

      <!-- Site footer -->
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->

	<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
	
  </body>
</html>
