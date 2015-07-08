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
					<li><a href="<?php echo base_url();?>index.php/controlador_login/desconectarse">Desconectarse</a></li>
				</ul>
			</div>
			<form action="<?php echo base_url();?>index.php/controlador_clave/cambiarClave" method="post">
			<fieldset>
				<table>
					<tr><td>Contraseña</td><td><input type="password" id="clave" name="clave"></input></td></tr>
					<tr><td>Nueva Contraseña</td><td> <input type="password" id="nueva" name="nueva"></input></td></tr>
					<tr><td><input type="submit" value="Cambiar"></input></td></td>
				</table>
			</fieldset>
			</form>
			<div id="footer">
				<center>
					Enlaces de Interés
					<div id="menu_">
					<ul>
						<li><a href="http://cesimo.ing.ula.ve/">CESIMO</a></li>
						<li><a href="http://www.lsi.upc.edu/~nlp/tools/parole-sp.html">Etiquetas Eagles</a></li>
						<li><a href="http://www.cs.vassar.edu/CES/">Documentación CES</a></li>
					</ul>
					</div>
				</center>
			</div>
		</div>
		
	</div>
</body>
</html>