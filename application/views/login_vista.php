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
		<center>
		<div id="login">
			<form action="http://localhost/Tesis/index.php/controlador_login/verificaUsuario" method="post">
				Usuario:<br /><input type="text" name="usuario" id="usuario" /><br />
				Clave:<br /><input type="password" name="clave" id="clave"  /><br />
				<input type="submit" name="submit" value="Conectar"  /><br />
			</form>
		</div>
		<div id="dialog-register" title="Solicitud de Registro">
			<form id="registro">
				<fieldset>
					<table>
						<tr>	
							<td><label for="nombre">Nombre</label></td>
							<td><input type="text" name="nombre" id="nombre" onkeypress="return permite(event,'car');" value="" class="text ui-widget-content ui-corner-all"/></td>
						</tr>
						<tr>	
							<td><label for="apellidos">Apellidos</label></td>
							<td><input type="text" name="apellidos" id="apellidos" onkeypress="return permite(event,'car');" value="" class="text ui-widget-content ui-corner-all"/></td>
						</tr>
						<tr>
							<td><label for="correo">Correo</label></td>
							<td><input type="text" name="correo" id="correo" onkeypress="return permite(event,'cor');" class="text ui-widget-content ui-corner-all"/></td>
						</tr>
						<tr>	
							<td><label for="usuarioR">Usuario</label></td>
							<td><input type="text" name="usuarioR" id="usuarioR" value="" onkeypress="return limita(12);" class="text ui-widget-content ui-corner-all"/></td>
						</tr>
						<tr>	
							<td><label for="claveR">Clave</label></td>
							<td><input type="password" name="claveR" id="claveR" onkeypress="return limita(12);" value="" class="text ui-widget-content ui-corner-all"/></td>
						</tr>
						
					</table>
				</fieldset>
			</form>
		</div>
		<button id="registrar">Solicitud de Registro</button>
		</center>
		<div id="footer">
			<center>
				Enlaces de Interés
				<div id="menu_">
				<ul>
					<li><a href="http://cesimo.ing.ula.ve/">CESIMO</a></li>
					<li><a href="http://www.lsi.upc.edu/~nlp/tools/parole-sp.html">Etiquetas Eagles</a></li>
					<li><a href="http://www.cs.vassar.edu/CES/">Documentación CES</a></li>
				</ul>
			</center>
		</div>

		</div>
	</div>
</body>
</html>