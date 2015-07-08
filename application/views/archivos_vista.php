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
		<form action="<?php echo base_url();?>index.php/controlador_archivo/BuscarNombre" method="post">
			<fieldset>
				<table>
					<tr><td><input type="text" id="archivo_buscar" name="archivo_buscar"></input></td><td><input type="submit" value="Buscar por Nombre"></input></td></tr>
				</table>
			</fieldset>
		</form>
		<form action="<?php echo base_url();?>index.php/controlador_archivo/BuscarUsuario" method="post">
			<fieldset>
				<table>
					<tr><td><input type="text" id="usuario_buscar" name="usuario_buscar"></input></td><td><input type="submit" value="Buscar por Usuario"></input></td></tr>
				</table>
			</fieldset>
		</form>
		
		<table>
		<tr><th><a href="<?php echo base_url();?>index.php/controlador_archivo/MostrarArchivos">Nombre Archivo</a></th><th><a href="<?php echo base_url();?>index.php/controlador_archivo/MostrarArchivosUltEtiq">Última vez etiquetado</a></th><th><a href="<?php echo base_url();?>index.php/controlador_archivo/MostrarArchivosUsuarioEtiq">Por</a></th><th><a href="<?php echo base_url();?>index.php/controlador_archivo/MostrarArchivosUltMarc">Última vez marcado</a></th><th><a href="<?php echo base_url();?>index.php/controlador_archivo/MostrarArchivosUsuarioMarc">Por</a></th><th>Ver Bitácora</th></tr>
		<?php
			
			for($i=0;$i<count($result);$i++){
				if($i%2==1){
					if($result[$i]->ult_etiq == "0000-00-00")
						$result[$i]->ult_etiq = "";
					if($result[$i]->ult_marc == "0000-00-00")
						$result[$i]->ult_marc = "";
					echo "<tr class=\"par\"><td>";
					echo "<a href=\"".base_url('index.php/controlador_archivo')."/CargarArchivo/".utf8_decode($result[$i]->archivo_name)."\">".utf8_decode($result[$i]->archivo_name)."</a></td><td>".$result[$i]->ult_etiq."</td><td>".$result[$i]->usuario_etiq."</td><td>".$result[$i]->ult_marc."</td><td>".$result[$i]->usuario_marc."</td><td><a href=\"".base_url('index.php/controlador_bitacora')."/MostrarBitacoras/".utf8_decode($result[$i]->archivo_name)."\"><img src='".base_url()."images/bitacora.png'></img></a></td></tr>\n";
				}
				else{
					if($result[$i]->ult_etiq == "0000-00-00")
						$result[$i]->ult_etiq = "";
					if($result[$i]->ult_marc == "0000-00-00")
						$result[$i]->ult_marc = "";
					echo "<tr><td>";
					echo "<a href=\"".base_url('index.php/controlador_archivo')."/CargarArchivo/".utf8_decode($result[$i]->archivo_name)."\">".utf8_decode($result[$i]->archivo_name)."</a></td><td>".$result[$i]->ult_etiq."</td><td>".$result[$i]->usuario_etiq."</td><td>".$result[$i]->ult_marc."</td><td>".$result[$i]->usuario_marc."</td><td><a href=\"".base_url('index.php/controlador_bitacora')."/MostrarBitacoras/".utf8_decode($result[$i]->archivo_name)."\"><img src='".base_url()."images/bitacora.png'></img></a></td></tr>\n";
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
				</ul>
			</center>
		</div>
		</div>
	</div>
</body>
</html>