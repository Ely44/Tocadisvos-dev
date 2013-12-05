<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <title>Tocadiscos</title>
    <link rel="stylesheet" href="estilo.css" type="text/css"  media="screen" />
  </head>
  <body>
    <div id="contenedor">
      <div id="header">
        <div id="publicidad1">Publicidad</div>
      </div>
      
	<!-- Inicio de la inclusion -->
         <?php

		$file=$_GET['path']; 
		switch($file) { 

		case principal: 
		include('home.php'); 
		break;

		case page:
		include('pagina.php');
		break;

		case page2:
		include('pagina2.php');
		break;

		case page3:
		include('pagina3.php');
		break;

		case page4:
		include('pagina4.php');
		break;

	
		default:
		include('home.php');
		break;
		}

	?>
        <!-- Fin de la inclusion -->

      <div id="footer">footer</div>
    </div>
  </body>
</html>

