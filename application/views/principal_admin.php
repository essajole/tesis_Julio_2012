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
					<li><a href="<?php echo base_url();?>index.php/controlador_usuario/MostrarUsuariosAprobar">Moderar usuarios</a></li>
					<li><a href="<?php echo base_url();?>index.php/controlador_login/desconectarse">Desconectarse</a></li>
				</ul>
			</div>
			
		<div id="content">

			<div class="demo">
				<div id="accordion">
					<!--ul>
						<li><a href="#tabs">Textos Orales (Entrevistas)</a></li>
						<li><a href="#tabs3">Textos Orales (Externos)</a></li>
						<li><a href="#tabs4">Textos Escritos</a></li>
					</ul-->
					
					<h3>Textos orales (propios del proyecto)</h3>
					<div id="tabs" class="tabs_2">
						<div class="tabs_3">
							<center>
								<button id="metadatos" class="metadatos_bot" value="<cesHeader type=&quot;Inserte tipo de grabación&quot; date=&quot;Inserte fecha aqui&quot;><?php echo "\n";?><fileDesc><?php echo "\n";?><fileGrp ID=&quot;&quot;><?php echo "\n";?><file ID=&quot;&quot; MIMETYPE=&quot;&quot; SIZE=&quot;&quot; CREATED=&quot;&quot; GROUPID=&quot;&quot;><?php echo "\n";?><FLocat LOCTYPE=&quot;&quot;></FLocat><?php echo "\n";?></file><?php echo "\n";?></fileGrp><?php echo "\n";?><extent><extNote id=&quot;Duracion&quot;> Inserte Duracion </extNote></extent> <sourceDesc><?php echo "\n";?><monogr><?php echo "\n";?><pubPlace> Lugar de la entrevista</pubPlace><?php echo "\n";?></monogr><?php echo "\n";?></sourceDesc></fileDesc><?php echo "\n";?><group count=&quot;Inserte cantidad de participantes&quot;><?php echo "\n";?><name type=&quot;Person&quot; id=&quot;Inserte id&quot;> </name><?php echo "\n";?></group><?php echo "\n";?></cesHeader><?php echo "\n";?>">Metadatos</button>
								
							</center>
							<ul>
								<li><a href="#tabs-1">Tipográficas</a></li>
								<li><a href="#tabs-2">De definición</a></li>
								<li><a href="#tabs-3">Pragmáticas</a></li>
								<li><a href="#tabs-4">Paralenguaje 1</a></li>
								<li><a href="#tabs-5">Paralenguaje 2</a></li>
							</ul>
							<div id="tabs-1">
								<fieldset>
								<table>
									<tr><td><button class="etiq_bot cursiva">Cursivas</button></td><td><button class="icono_st cursiva_st" title="Estructura"></button><button class="icono_ex cursiva_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot negritas">Negritas</button></td><td><button class="icono_st negritas_st" title="Estructura"></button><button class="icono_ex negritas_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot comillas">Comillas</button></td><td><button class="icono_st comillas_st" title="Estructura"></button><button class="icono_ex comillas_ex" title="Ejemplo"></button></td></tr>
								</table>
								</fieldset>
							</div>
							<div id="tabs-2">
								<fieldset>
								<table>
									<tr><td><button class="etiq_bot vcfd">Verbo copulativo</button></td><td><button class="icono_st vcfd_st" title="Estructura"></button><button class="icono_ex vcfd_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot vmfd">Verbo metalingüístico</button></td><td><button class="icono_st vmfd_st" title="Estructura"></button><button class="icono_ex vmfd_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot definiensd">Definiens derecha</button></td><td><button class="icono_st definiensd_st" title="Estructura"></button><button class="icono_ex definiensd_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot definiensi">Definiens izquierda</button></td><td><button class="icono_st definiensi_st" title="Estructura"></button><button class="icono_ex definiensi_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot definicion">Definición</button></td><td><button class="icono_st definicion_st" title="Estructura"></button><button class="icono_ex definicion_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot etnl">Otros signos</button></td><td><button class="icono_st etnl_st" title="Estructura"></button><button class="icono_ex etnl_ex" title="Ejemplo"></button></td></tr>
								</table>
								</fieldset>
							</div>
							<div id="tabs-3">
								<fieldset>
								<table>
									<tr><td><button class="etiq_bot reform">Reformulación</button></td><td><button class="icono_st reform_st" title="Estructura"></button><button class="icono_ex reform_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot ejem">Ejemplificación</button></td><td><button class="icono_st ejem_st" title="Estructura"></button><button class="icono_ex ejem_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot sino">Relación de sinonimia</button></td><td><button class="icono_st sino_st" title="Estructura"></button><button class="icono_ex sino_ex" title="Ejemplo"></button></td></tr>
								</table>
								</fieldset>
							</div>
							
							<div id="tabs-4">
								<fieldset>
									<table>
										<tr><td><button class="etiq_bot comentario">Comentario</button></td><td><button class="icono_st comentario_st" title="Estructura"><button class="icono_ex comentario_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot prosodia">Prosodia</button></td><td><button class="icono_st prosodia_st" title="Estructura"></button><button class="icono_ex prosodia_ex" title="Ejemplo"></td></tr>
										<tr><td><button class="etiq_bot deletreo">Deletreo</button></td><td><button class="icono_st deletreo_st" title="Estructura"></button><button class="icono_ex deletreo_ex" title="Ejemplo"></td></tr>
										<tr><td><button class="etiq_bot aproximacion">Aproximación</button></td><td><button class="icono_st aproximacion_st" title="Estructura"><button class="icono_ex aproximacion_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot frag_inint">Fragmento ininteligible</button></td><td><button class="icono_st frag_inint_st" title="Estructura"><button class="icono_ex frag_inint_ex" title="Ejemplo"></button></td></tr>
									</table>
								</fieldset>
							</div>
							<div id="tabs-5">
								<fieldset>
									<table>			
										<tr><td><button class="etiq_bot paraverb">Elem. paraverbales</button></td><td><button class="icono_st paraverb_st" title="Estructura"><button class="icono_ex paraverb_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot onomat">Onomatopeya</button></td><td><button class="icono_st onomat_st" title="Estructura"></button><button class="icono_ex onomat_ex" title="Ejemplo"></td></tr>
										<tr><td><button class="etiq_bot kinesic">Elem. cinésicos</button></td><td><button class="icono_st kinesic_st" title="Estructura"><button class="icono_ex kinesic_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot turno_habla">Turno de habla</button></td><td><button class="icono_st turno_habla_st" title="Estructura"><button class="icono_ex turno_habla_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot overlap">Voz superpuesta</button></td><td><button class="icono_st overlap_st" title="Estructura"><button class="icono_ex overlap_ex" title="Ejemplo"></button></td></tr>
									</table>
								</fieldset>
							</div>
						</div>
					</div>
					<h3>Textos orales (fuentes externas)</h3>
					<div id="tabs3" class="tabs_2">
						<div class="tabs_3">
							<center>
								<button id="metadatos_1" class="metadatos_bot" value="<cesHeader type=&quot;Inserte tipo de programa&quot; date=&quot;Inserte fecha aqui&quot;><?php echo "\n";?><fileDesc><?php echo "\n";?><fileGrp ID=&quot;&quot;><?php echo "\n";?><file ID=&quot;&quot; MIMETYPE=&quot;&quot; SIZE=&quot;&quot; CREATED=&quot;&quot; GROUPID=&quot;&quot;><?php echo "\n";?><FLocat LOCTYPE=&quot;&quot;></FLocat><?php echo "\n";?></file><?php echo "\n";?></fileGrp><?php echo "\n";?><titleStmt><respStmt><?php echo "\n";?><respType>Inserte tipo de entidad responsable</respType><?php echo "\n";?><respName>Nombre de la entidad responsable</respName><?php echo "\n";?></respStmt></titleStmt><?php echo "\n";?><extent><?php echo "\n";?><extNote id=&quot;Duracion&quot;> Inserte duracion del programa </extNote><?php echo "\n";?><extNote id=&quot;SegmentoRecogido&quot;> Inserte el segmento recogido </extNote><?php echo "\n";?><extNote id=&quot;NumeroInterlocutores&quot;> Inserte total de interlocutores </extNote><?php echo "\n";?></extent><?php echo "\n";?><sourceDesc><?php echo "\n";?><biblStruct><monogr><?php echo "\n";?><pubPlace> Inserte lugar </pubPlace><?php echo "\n";?></monogr></biblStruct><?php echo "\n";?></sourceDesc></fileDesc><?php echo "\n";?><group count=&quot;Inserte cantidad de participantes&quot;><?php echo "\n";?><name type=&quot;Person&quot; id=&quot;Inserte id&quot;> </name><?php echo "\n";?></group><?php echo "\n";?></cesHeader><?php echo "\n";?>">Metadatos</button>
							</center>
							<ul>
								<li><a href="#tabs3-1">Tipográficas</a></li>
								<li><a href="#tabs3-2">De definición</a></li>
								<li><a href="#tabs3-3">Pragmáticas</a></li>
								<li><a href="#tabs3-4">Paralenguaje 1</a></li>
								<li><a href="#tabs3-5">Paralenguaje 2</a></li>
							</ul>
							<div id="tabs3-1">
								<fieldset>
								<table>
									<tr><td><button class="etiq_bot cursiva">Cursivas</button></td><td><button class="icono_st cursiva_st" title="Estructura"></button><button class="icono_ex cursiva_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot negritas">Negritas</button></td><td><button class="icono_st negritas_st" title="Estructura"></button><button class="icono_ex negritas_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot comillas">Comillas</button></td><td><button class="icono_st comillas_st" title="Estructura"></button><button class="icono_ex comillas_ex" title="Ejemplo"></button></td></tr>
								</table>
								</fieldset>
							</div>
							<div id="tabs3-2">
								<fieldset>
								<table>
									<tr><td><button class="etiq_bot vcfd">Verbo copulativo</button></td><td><button class="icono_st vcfd_st" title="Estructura"></button><button class="icono_ex vcfd_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot vmfd">Verbo metalingüístico</button></td><td><button class="icono_st vmfd_st" title="Estructura"></button><button class="icono_ex vmfd_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot definiensd">Definiens derecha</button></td><td><button class="icono_st definiensd_st" title="Estructura"></button><button class="icono_ex definiensd_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot definiensi">Definiens izquierda</button></td><td><button class="icono_st definiensi_st" title="Estructura"></button><button class="icono_ex definiensi_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot definicion">Definición</button></td><td><button class="icono_st definicion_st" title="Estructura"></button><button class="icono_ex definicion_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot etnl">Otros signos</button></td><td><button class="icono_st etnl_st" title="Estructura"></button><button class="icono_ex etnl_ex" title="Ejemplo"></button></td></tr>
								</table>
								</fieldset>
							</div>
							<div id="tabs3-3">
								<fieldset>
								<table>
									<tr><td><button class="etiq_bot reform">Reformulación</button></td><td><button class="icono_st reform_st" title="Estructura"></button><button class="icono_ex reform_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot ejem">Ejemplificación</button></td><td><button class="icono_st ejem_st" title="Estructura"></button><button class="icono_ex ejem_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot sino">Relación de sinonimia</button></td><td><button class="icono_st sino_st" title="Estructura"></button><button class="icono_ex sino_ex" title="Ejemplo"></button></td></tr>
								</table>
								</fieldset>
							</div>
							
							<div id="tabs3-4">
								<fieldset>
									<table>
										<tr><td><button class="etiq_bot comentario">Comentario</button></td><td><button class="icono_st comentario_st" title="Estructura"><button class="icono_ex comentario_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot prosodia">Prosodia</button></td><td><button class="icono_st prosodia_st" title="Estructura"></button><button class="icono_ex prosodia_ex" title="Ejemplo"></td></tr>
										<tr><td><button class="etiq_bot deletreo">Deletreo</button></td><td><button class="icono_st deletreo_st" title="Estructura"></button><button class="icono_ex deletreo_ex" title="Ejemplo"></td></tr>
										<tr><td><button class="etiq_bot aproximacion">Aproximación</button></td><td><button class="icono_st aproximacion_st" title="Estructura"><button class="icono_ex aproximacion_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot frag_inint">Fragmento ininteligible</button></td><td><button class="icono_st frag_inint_st" title="Estructura"><button class="icono_ex frag_inint_ex" title="Ejemplo"></button></td></tr>
									</table>
								</fieldset>
							</div>
							<div id="tabs3-5">
								<fieldset>
									<table>		
										<tr><td><button class="etiq_bot paraverb">Elem. paraverbales</button></td><td><button class="icono_st paraverb_st" title="Estructura"><button class="icono_ex paraverb_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot onomat">Onomatopeya</button></td><td><button class="icono_st onomat_st" title="Estructura"></button><button class="icono_ex onomat_ex" title="Ejemplo"></td></tr>
										<tr><td><button class="etiq_bot kinesic">Elem. cinésicos</button></td><td><button class="icono_st kinesic_st" title="Estructura"><button class="icono_ex kinesic_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot turno_habla">Turno de habla</button></td><td><button class="icono_st turno_habla_st" title="Estructura"><button class="icono_ex turno_habla_ex" title="Ejemplo"></button></td></tr>
										<tr><td><button class="etiq_bot overlap">Voz superpuesta</button></td><td><button class="icono_st overlap_st" title="Estructura"><button class="icono_ex overlap_ex" title="Ejemplo"></button></td></tr>
									</table>
								</fieldset>
							</div>
						</div>
					</div>
					<h3>Textos escritos</h3>
					<div id="tabs4" class="tabs_2">
						<div class="tabs_3">
							<center><button id="metadatos_2" class="metadatos_bot" value="<cesHeader type=&quot;Inserte tipo de texto&quot; status=&quot;Inserte estado del archivo&quot; gender=&quot;Inserte Genero del texto&quot;><?php echo "\n";?><fileDesc><?php echo "\n";?><fileGrp ID=&quot;&quot;><?php echo "\n";?><file ID=&quot;&quot; MIMETYPE=&quot;&quot; SIZE=&quot;&quot; CREATED=&quot;&quot; GROUPID=&quot;&quot;><?php echo "\n";?><FLocat LOCTYPE=&quot;&quot;></FLocat><?php echo "\n";?></file><?php echo "\n";?></fileGrp><?php echo "\n";?><titleStmt><h.title> Nombre del Archivo </h.title></titleStmt><?php echo "\n";?><extent><wordCount> Numero de palabras </wordCount></extent><?php echo "\n";?><sourceDesc><biblStruct><monogr><?php echo "\n";?><h.title> Titulo </h.title><?php echo "\n";?><h.author> Autor </h.author><?php echo "\n";?><imprint><?php echo "\n";?><pubPlace> Lugar de publicacion </pubPlace><?php echo "\n";?><publisher> Editorial </publisher><?php echo "\n";?><pubDate> Fecha de publicacion </pubDate><?php echo "\n";?><editionStmt version=&quot;&quot;></editionStmt><?php echo "\n";?></imprint><?php echo "\n";?></monogr></biblStruct></sourceDesc><?php echo "\n";?></fileDesc><?php echo "\n";?></cesHeader>">Metadatos</button></center><br/>
							<center><button id="parrafo" class="etiq_bot">Párrafo</button><button id="oracion" class="etiq_bot">Oración</button><center>
							<ul>
								<li><a href="#tabs4-1">Tipográficas</a></li>
								<li><a href="#tabs4-2">De definición</a></li>
								<li><a href="#tabs4-3">Pragmáticas</a></li>
							</ul>
							<div id="tabs4-1">
								<fieldset>
								<table>
									<tr><td><button class="etiq_bot cursiva">Cursivas</button></td><td><button class="icono_st cursiva_st" title="Estructura"></button><button class="icono_ex cursiva_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot negritas">Negritas</button></td><td><button class="icono_st negritas_st" title="Estructura"></button><button class="icono_ex negritas_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot comillas">Comillas</button></td><td><button class="icono_st comillas_st" title="Estructura"></button><button class="icono_ex comillas_ex" title="Ejemplo"></button></td></tr>
								</table>
								</fieldset>
							</div>
							<div id="tabs4-2">
								<fieldset>
								<table>
									<tr><td><button class="etiq_bot vcfd">Verbo copulativo</button></td><td><button class="icono_st vcfd_st" title="Estructura"></button><button class="icono_ex vcfd_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot vmfd">Verbo metalingüístico</button></td><td><button class="icono_st vmfd_st" title="Estructura"></button><button class="icono_ex vmfd_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot definiensd">Definiens derecha</button></td><td><button class="icono_st definiensd_st" title="Estructura"></button><button class="icono_ex definiensd_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot definiensi">Definiens izquierda</button></td><td><button class="icono_st definiensi_st" title="Estructura"></button><button class="icono_ex definiensi_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot definicion">Definición</button></td><td><button class="icono_st definicion_st" title="Estructura"></button><button class="icono_ex definicion_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot etnl">Otros signos</button></td><td><button class="icono_st etnl_st" title="Estructura"></button><button class="icono_ex etnl_ex" title="Ejemplo"></button></td></tr>
								</table>
								</fieldset>
							</div>
							<div id="tabs4-3">
								<fieldset>
								<table>
									<tr><td><button class="etiq_bot reform">Reformulación</button></td><td><button class="icono_st reform_st" title="Estructura"></button><button class="icono_ex reform_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot ejem">Ejemplificación</button></td><td><button class="icono_st ejem_st" title="Estructura"></button><button class="icono_ex ejem_ex" title="Ejemplo"></button></td></tr>
									<tr><td><button class="etiq_bot sino">Relación de sinonimia</button></td><td><button class="icono_st sino_st" title="Estructura"></button><button class="icono_ex sino_ex" title="Ejemplo"></button></td></tr>
								</table>
								</fieldset>
							</div>
						</div>
					</div>
				</div>	

				<div id="dialog1" title="Estructura">
					<p>&lt;it&gt; ... &lt;/it&gt;</p>
				</div>

				<div id="dialog2" title="Estructura">
					<p>&lt;b&gt; ... &lt;/b&gt;</p>
				</div>

				<div id="dialog3" title="Estructura">
					<p>&lt;invcomm&gt; ... &lt;/invcomm&gt;</p>
				</div>

				<div id="dialog4" title="Estructura">
					<p>&lt;defcopvb lemma="verbo en infinitivo" pos="etiqueta EAGLES"&gt; ... &lt;/defcopvb&gt;</p>
				</div>

				<div id="dialog5" title="Estructura">
					<p>&lt;defmetalvb lemma="verbo en infinitivo" pos="etiqueta EAGLES"&gt; ... &lt;/defmetalvb&gt;</p>
				</div>

				<div id="dialog6" title="Estructura">
					<p>&lt;rdefiniens&gt; ... &lt;/rdefiniens&gt;</p>
				</div>

				<div id="dialog7" title="Estructura">
					<p>&lt;ldefiniens&gt; ... &lt;/ldefiniens&gt;</p>
				</div>

				<div id="dialog8" title="Estructura">
					<p>&lt;def  typ valor = "1-4"&gt; ... &lt;/def&gt;<br/>
						Valor:
						<ul>
						   <li> "1" enciclopédica intensional </li>
						   <li> "2" enciclopédica extensional </li>
						   <li> "3" funcional </li>
						   <li> "4" sinonímica </li>
						</ul>
					</p>
				</div>
				
				<div id="dialog9" title="Estructura">
					<p>&lt;defop valor = "elemento"&gt; ... &lt;/defop&gt;</p>
				</div>

				<div id="dialog10" title="Estructura">
					<p>&lt;mkr&gt; ... &lt;/mkr&gt;</p>
				</div>

				<div id="dialog11" title="Estructura">
					<p>&lt;examkr  mkr = " * "&gt; ... &lt;examkr&gt; <br/> * se indica el marcador</p>
				</div>

				<div id="dialog12" title="Estructura">
					<p>&lt;syno&gt; ... &lt;/syno&gt;</p>
				</div>

				<div id="dialog13" title="Ejemplo">
					<p>Cuando joven sufrió los azotes de la vida y de la naturaleza en los páramos adentro, &lt;it&gt; parameando &lt;/it&gt;ganado, buscando leña para vender y ayudar a la casa en algo.</p>
				</div>

				<div id="dialog14" title="Ejemplo">
					<p>Ahora todo es lujo. Antes &lt;b&gt;no existía&lt;/b&gt; ni el tenedor. &lt;b&gt;Entrevista a Rafael Ramón Gil y María Segunda Pérez de Gil &lt;/b&gt;</p>
				</div>

				<div id="dialog15" title="Ejemplo">
					<p>Un taller de etno-gastronomía, &lt;invcomm&gt;La papa en las mesas del mundo&lt;/invcomm&gt;, dictado por María Eugenia Arreaza, los invita a recordar y a imaginar su propia culinaria.</p>
				</div>

				<div id="dialog16" title="Ejemplo">
					<p>&lt;b&gtMal de padrejón &lt;/b&gt; &lt;defcopvb lemma="ser" pos="VAIP3S0"&gt; Es &lt;/defcopvb&gt; cuando un hombre está bebiendo mucho &lt;b&gt;miche &lt;/b&gt;y no come</p>
				</div>

				<div id="dialog17" title="Ejemplo">
					<p>Las viviendas se construían de cimiento de piedra y de tapia, las de piedra llevaban techo de &lt;it&gt;tamo&lt;/it&gt;. Eso hacían &lt;it&gt;manojitos&lt;/it&gt; de paja y los iban acomodando como tejer una estera con agujas de madera y cabuya de &lt;it&gt;fique&lt;/it&gt;, lo que &lt;defmetalvb lemma="llamar" pos="VMII3P0"&gt; llamaban &lt;/defmetalvb&gt;&lt;it&gt;piscuiza&lt;/it&gt;.</p>
				</div>

				<div id="dialog18" title="Ejemplo">
					<p>&lt;b&gtMal de padrejón &lt;/b&gt; &lt;defcopvb lemma "ser" = pos "VAIP3S0"&gt; Es &lt;/defcopvb&gt; &lt;rdefiniens&gt;cuando un hombre está bebiendo mucho &lt;b&gt;miche &lt;/b&gt;y no come &lt;/rdefiniens&gt;</p>
				</div>

				<div id="dialog19" title="Ejemplo">
					<p>&lt;ldefiniens&gt;Eso hacían &lt;it&gt;manojitos&lt;/it&gt; de paja y los iban acomodando como tejer una estera con agujas de madera y cabuya de &lt;it&gt;fique&lt;/it&gt;, lo que &lt;/ldefiniens&gt;&lt;defmetalvb lemma = "llamar" pos "VMII3P0"&gt; llamaban &lt;/defmetalvb&gt;&lt;it&gt;piscuiza&lt;/it&gt;.</p>
				</div>

				<div id="dialog20" title="Ejemplo">
					<p>&lt;def typ = "3"&gt; &lt;ldefiniens&gt;Eso hacían &lt;it&gt;manojitos&lt;/it&gt; de paja y los iban acomodando como tejer una estera con agujas de madera y cabuya de &lt;it&gt;fique&lt;/it&gt;, lo que &lt;/ldefiniens&gt;&lt;defmetalvb lemma = "llamar" pos "VMII3P0"&gt; llamaban &lt;/defmetalvb&gt;&lt;it&gt;piscuiza&lt;/it&gt;&lt;/def&gt;.</p>
				</div>

				<div id="dialog21" title="Ejemplo">
					<p>Antes el ahijado tenía que hincarse donde fuera, no había carreteras asfaltadas y si había un pozo de agua tenía uno que hincarse, quitarse el sombrero y hacer el &lt;def typ = "2"&gt;bendito&lt;defop= "dos puntos"&gt;: &lt;/defop&gt;&lt;rdefiniens&gt;Bendito y alabado sea el Señor... &lt;/definiens&gt;&lt;/def&gt;</p>
				</div>

				<div id="dialog22" title="Ejemplo">
					<p>La oración "se escribe" al revés, &lt;mkr&gt; &lt;paramkr&gt;es decir&lt;/paramkr&gt;, hacia atrás,&lt;/mkr&gt; con el zumo de la &lt;it&gt; yerba mora &lt;/it&gt; machacada.</p>
				</div>

				<div id="dialog23" title="Ejemplo">
					<p>El &lt;it&gt;unto de azahars&lt;/it&gt; es "cordial" porque está hecho de plantas frías &lt;examkr = "como">  como el &lt;it&gt;niquitao &lt;/it&gt;y el &lt;it&gt;aliso&lt;/it&gt; &lt;/examkr&gt;y de plantas calientes &lt;examkr = "como"&gt;como la ruda&lt;/examkr&gt;</p>
				</div>

				<div id="dialog24" title="Ejemplo">
					<p>Que vieron cuando salió algo así como un &lt;def typ = "4"&gt; relámpago &lt;syno&gt; o &lt;/syno&gt; &lt;rdefiniens&gt;rayo alargado &lt;/rdefiniens&gt;&lt;/def&gt; parecido a una barra de metal que brilló al pasar frente de ellos</p>
				</div>
				
				<div id="dialog25" title="Estructura">
					<p>&lt;cesHeader version =""&gt; ... &lt;/cesHeader&gt;</p>
				</div>
				
				<div id="dialog26" title="Estructura">
					<p>&lt;fileDesc&gt; ... &lt;/fileDesc&gt;</p>
				</div>
				
				<div id="dialog27" title="Estructura">
					<p>&lt;titleStmt&gt; ... &lt;/titleStmt&gt;</p>
				</div>
				
				<div id="dialog28" title="Estructura">
					<p>&lt;titleStmt&gt;</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h.title&gt; ... &lt;/h.title&gt;</p>
					<p>&lt;titleStmt&gt;</p>
				</div>
				
				<div id="dialog29" title="Estructura">
					<p>&lt;publicationStmt&gt; ... &lt;/publicationStmt&gt;</p>
				</div>
				
				<div id="dialog30" title="Estructura">
					<p>&lt;pubAddress&gt; ... &lt;/pubAddress&gt;</p>
				</div>
				
				<div id="dialog31" title="Estructura">
					<p>&lt;pubDate&gt; ... &lt;/pubDate&gt;</p>
				</div>
				
				<div id="dialog32" title="Estructura">
					<p>&lt;sourceDesc&gt; ... &lt;/sourceDesc&gt;</p>
				</div>
				
				<div id="dialog33" title="Estructura">
					<p>&lt;biblStruct&gt; ... &lt;/biblStruct&gt;</p>
				</div>
				
				<div id="dialog34" title="Estructura">
					<p>&lt;biblStruct&gt;</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;monogr&gt; ... &lt;/monogr&gt;</p>
					<p>&lt;/biblStruct&gt;</p>
				</div>
				
				<div id="dialog35" title="Estructura">
					<p>&lt;biblStruct&gt;</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;analytic&gt; ... &lt;/analytic&gt;</p>
					<p>&lt;/biblStruct&gt;</p>
				</div>
				
				<div id="dialog36" title="Estructura">
					<p>&lt;biblStruct&gt;</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h.author&gt; ... &lt;/h.author&gt;</p>
					<p>&lt;/biblStruct&gt;</p>
				</div>
				
				<div id="dialog37" title="Estructura">
					<p>&lt;biblStruct&gt;</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;imprint&gt; ... &lt;/imprint&gt;</p>
					<p>&lt;/biblStruct&gt;</p>
				</div>
				
				<div id="dialog38" title="Estructura">
					<p>&lt;imprint&gt;</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;pubPlace&gt; ... &lt;/pubPlace&gt;</p>
					<p>&lt;/imprint&gt;</p>
				</div>
				
				<div id="dialog39" title="Estructura">
					<p>&lt;creation&gt; ... &lt;/creation&gt;</p>
				</div>
				
				<div id="dialog40" title="Estructura">
					<p>&lt;langUsage&gt; ... &lt;/langUsage&gt;</p>
				</div>
				
				<div id="dialog41" title="Estructura">
					<p>&lt;langUsage&gt;</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;language id ="" iso639 =""&gt; ... &lt;/language&gt;</p>
					<p>&lt;/langUsage&gt;</p>
				</div>
				
				<div id="dialog42" title="Estructura">
					<p>&lt;wsdUsage&gt; ... &lt;/wsdUsage&gt;</p>
				</div>
				
				<div id="dialog43" title="Estructura">
					<p>&lt;wsdUsage&gt;</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;writingSystem id =""&gt; ... &lt;/writingSystem&gt;</p>
					<p>&lt;/wsdUsage&gt;</p>
				</div>
				
				<div id="dialog44" title="Estructura">
					<p>&lt;comentario valor="atributo"&gt; ... &lt;/comentario&gt;</p>
				</div>
				
				<div id="dialog45" title="Estructura">
					<p>&lt;prosodia valor="atributo"&gt; ... &lt;/prosodia&gt;</p>
				</div>
				
				<div id="dialog46" title="Estructura">
					<p>&lt;deletr valor="atributo"&gt; ... &lt;/deletr&gt;</p>
				</div>
				
				<div id="dialog47" title="Estructura">
					<p>&lt;aproximd valor="atributo"&gt; ... &lt;/aproximd&gt;</p>
				</div>
				
				<div id="dialog48" title="Estructura">
					<p>&lt;inintel&gt; ... &lt;/inintel&gt;</p>
				</div>
				
				<div id="dialog49" title="Estructura">
					<p>&lt;paraverb valor="atributo"&gt; ... &lt;/paraverb&gt;</p>
				</div>
				
				<div id="dialog50" title="Estructura">
					<p>&lt;onomat valor="atributo"&gt; ... &lt;/onomat&gt;</p>
				</div>
				
				<div id="dialog51" title="Estructura">
					<p>&lt;kinesic valor="atributo"&gt; ... &lt;/kinesic&gt;</p>
				</div>
				
				<div id="dialog52" title="Estructura">
					<p>&lt;u valor="" &gt; ... &lt;/u&gt;</p>
				</div>
				
				<div id="dialog53" title="Estructura">
					<p>&lt;overlap valor="" &gt; ... &lt;/overlap&gt;</p>
				</div>
				
				<div id="dialog54" title="Estructura">
					<p>&lt;comentario valor="silencio" &gt; &#91;silencio&#93; &lt;/comentario&gt;</p>
				</div>
				
				<div id="dialog55" title="Estructura">
					<p>&lt;prosodia valor="down" &gt; Así se llamaba &lt;/prosodia&gt;</p>
				</div>
				
				<div id="dialog56" title="Estructura">
					<p>&lt;deletr valor="ja mu ga" &gt; jamuga &lt;/overlap&gt;</p>
				</div>
				
				<div id="dialog57" title="Estructura">
					<p>&lt;aproximd &gt; nunca las consumió. El no le &lt;/aproximd&gt;</p>
				</div>
				
				<div id="dialog58" title="Estructura">
					<p>&lt;inintel&gt; ... &lt;/inintel&gt;</p>
				</div>
				
				<div id="dialog59" title="Estructura">
					<p>Andábamos por el monte como &lt;paraverb valor="carrsp" &gt; animalitos &lt;/paraverb&gt;</p>
				</div>
				
				<div id="dialog60" title="Estructura">
					<p>&lt;onomat &gt; ¡pum! &lt;/onomat&gt;</p>
				</div>
				
				<div id="dialog61" title="Estructura">
					<p>y entonces ique dicia &lt;kinesic valor="sube cejas" &gt; Maria Asución &lt;/kinesic&gt;</p>
				</div>
				
				<div id="dialog62" title="Estructura">
					<p>&lt;u valor="E" &gt; ¿Cómo se llama usted y cuántos años tiene? &lt;/u&gt;</p>
				</div>
				
				<div id="dialog63" title="Estructura">
					<p>&lt;overlap valor="P1" &gt; sí, a mí me gustan mucho &lt;/overlap&gt;</p>
				</div>
			
			</div>

			<div id="left">
				<div id="load_file">
					<?php 
					$this->load->helper(array('form'));
					echo form_open_multipart(base_url('index.php').'/upload/do_upload');
						
					?>
						<input type="file" name="userfile" size="20" value="archivo"/>
						<input type="submit" value="Cargar Archivo"></input>
						<?php
						if($error == NULL){}
						else
						echo "<strong><span style=\"color:red\">No se pudo cargar el archivo correctamente.</span></strong>";
					?>
					</form>
				</div>
				<form name="form1" action="">
					<div id="diiv">
						<textarea id="texto" rows="30" cols="72" name="texto" onclick="devPos()" class="text ui-widget-content ui-corner-all"><?php echo $archivo; ?></textarea>
					</div>
				</form>

				<div id="dialog-save" title="Guardar Archivo">
					<form id="guardar_archivo">
						<fieldset>
							<table>
								<tr class="par">
									<td><label for="archivo_name">Nombre del archivo</label></td>
									<td><input type="text" name="archivo_name" id="archivo_name" class="text ui-widget-content ui-corner-all"/></td>
								</tr>
								<tr>
									<td><label for="marcado">Ha marcado el archivo?</label></td>
									<td><input type="checkbox" name="marcado" id="marcado" value="0" class="text ui-widget-content ui-corner-all"/></td>
								</tr>
								<tr class="par">
									<td><label for="etiquetado">Ha etiquetado el archivo?</label></td>
									<td><input type="checkbox" name="etiquetado" id="etiquetado" value="0" class="text ui-widget-content ui-corner-all"/></td>
								</tr>
								<tr>
									<td><label for="comentario">Especifique modificación</label></td>
									<td><textarea rows="5" cols="22" name="comentario" id="comentario" class="text ui-widget-content ui-corner-all"></textarea></td>
								</tr>
							</table>
						</fieldset>
					</form>
				</div>
				<button id="guardar">Guardar Archivo</button>
				
			</div>
			<p align="right"><a href="<?php echo base_url();?>index.php/controlador_clave/cargarVistaClave">Cambiar contraseña</a></p>
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