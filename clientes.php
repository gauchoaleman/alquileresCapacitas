<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include "include/inc_head.php"; ?>
  </head>

  <body>

    <div class="container">

      <?php include "include/inc_menu.php"; 
	  echo $_GET["mensaje"];
	  if( isset($_GET["accion"]))
	  {
	  switch( $_GET["accion"]){
		case "agregarCliente":
			include "include/inc_formularioCliente.php";
			break;
		case "listadoClientes":
		default:
			include "include/inc_listadoClientes.php";
			break;
	  }
	  }
	  else
	  {
		  include "include/inc_listadoClientes.php";
	  }
	  ?>
      <!-- Site footer -->
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->


   
  </body>
</html>
