<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="en"
    lang="es">
<head>
    <title>InMemoriAN</title>
	<meta content="text/html;" http-equiv="content-type" charset="iso-8859-1">

    <link type="text/css" href="<?php echo base_url();?>css/dot-luv/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
	<link type="text/css" href="<?php echo base_url();?>css/style.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.22.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/js_tesis.js"></script>
	
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="menu">
			<ul>
				<li><a href="<?php echo base_url();?>index.php/welcome">Principal</a></li>
				<li><a href="<?php echo base_url();?>index.php/controlador_archivo/MostrarArchivos">Archivos del corpus</a></li>
				<li><a href="<?php echo base_url();?>index.php/controlador_login/desconectarse">Desconectarse</a></li>
			</ul>
		</div>
		<center>
		<table>
		<tr><th>Nombre Archivo</th><th>Usuario</th><th>Fecha</th><th>Acción</th><th>Comentario</th></tr>
		<?php
			for($i=0;$i<count($result);$i++){
				if($i%2==1){
					echo "<tr class=\"par\"><td>";
					echo utf8_decode($result[$i]->nombre_archivo)."</td><td>".$result[$i]->usuario_bitacora."</td><td>".$result[$i]->fecha."</td><td>".$result[$i]->accion."</td><td>".$result[$i]->comentario."</td></tr>\n";
				}
				else{
					echo "<tr><td>";
					echo utf8_decode($result[$i]->nombre_archivo)."</td><td>".$result[$i]->usuario_bitacora."</td><td>".$result[$i]->fecha."</td><td>".$result[$i]->accion."</td><td>".$result[$i]->comentario."</td></tr>\n";
				}
			}
		?>
			</table></center>

		<div id="footer">
			<center>
				Enlaces de Interés
				<div id="menu_">
				<ul>
					<li><a href="http://cesimo.ing.ula.ve/">CESIMO</a></li>
					<li><a href="http://www.lsi.upc.edu/~nlp/tools/parole-sp.html">Etiquetas Eagles</a></li>
					<li><a href="http://www.cs.vassar.edu/CES/">Documentación CES</a></li>
			</center>
		</div>

		</div>
	</div>
</body>
</html>