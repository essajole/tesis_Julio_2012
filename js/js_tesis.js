function limita(maximo){
            elemento = document.getElementById("boton0");
            if(elemento.value.length >= maximo)
                return false;
            else
                return true;
        }
		function devPos(){ 		
			input=document.getElementById('texto');
			if(typeof document.selection != 'undefined' && document.selection && typeof input.selectionStart == 'undefined'){ 

			var str =document.selection.createRange(); 
			stored_range = str.duplicate(); 
			stored_range.moveToElementText(input); 
			stored_range.setEndPoint( 'EndToEnd', str ); 
			input.selectionStart = stored_range.text.length - str.text.length; 
			input.selectionEnd = input.selectionStart + str.text.length; 
			valor = input.selectionStart
			return valor;
			}
			else if(typeof input.selectionStart != 'undefined'){ 
			valor = input.selectionStart
			return valor;
			} 
		}
		
		function permite(elEvento, permitidos){
            var numeros = "0123456789/";
			var correo = "0123456789abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ-_.@"
            var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ-"
            var numeros_caracteres = numeros + caracteres;
            var teclas_especiales = [8, 37, 39, 46];
            // 8= backspace, 46 = supr, 37= flecha izquierda, 39= flecha derecha
            
            //Definir caracteres permitidos
            switch(permitidos){
                case 'num':
                    permitidos = numeros;
                    break;
                case 'car':
                    permitidos = caracteres;
                    break;
                case 'num_car':
                    permitidos = numeros_caracteres;
                    break;
				case 'cor':
					permitidos = correo;
                
            }
            //Obtener la tecla presionada
            var evento = elEvento || window.event;
            var codigoCaracter = evento.charCode || evento.keyCode;
            var caracter = String.fromCharCode(codigoCaracter);

            //Comprobar si es tecla especial
            var tecla_especial = false;
            for (var i in teclas_especiales){
                if(codigoCaracter == teclas_especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }
            //Comprobar si la tecla se encuentra en los caracteres permitidos            
            //o si es una tecla especial
            return permitidos.indexOf(caracter) != -1 || tecla_especial;
        }
	
        $(function(){
            
            allFields = $([]).add($("#nombre")).add($("#apellidos")).add($("#correo")).add($("#usuario")).add($("#clave"));
            allFields2 = $([]).add($("#usuario1")).add($("#clave1"));
			allFields3 = $([]).add($("#archivo_name"));
            
			$('#registrar').button().click(function(){
                $('#dialog-register').dialog("open");
            });
            $('#loguear').button().click(function(){
                $('#dialog-form').dialog("open");
            });
			
			$('#guardar').button().click(function(){
                $('#dialog-save').dialog("open");
            });
			
			$('.metadatos_bot').button();
			$('.parrafo').button();
			$('.oracion').button();
			
			$( "#dialog-register" ).dialog({
                autoOpen: false,
				resizable: false,
				height: 300,
				width: 450,
				modal: true,
                buttons: {
                    "Enviar Solicitud": function(){
					
							var $form = $("#registro"),
								nombre_ = $("input#nombre").val();
								clave_ = $("input#claveR").val();
								apellidos_ = $("input#apellidos").val();
								usuario_ = $("input#usuarioR").val();
								correo_ = $("input#correo").val();
								host = window.location.hostname;
								url = "http://"+host+"/Tesis/index.php/controlador_usuario/InsertarUsuario";
														
							$.post( url, { nombre: nombre_ , clave: clave_ , apellidos: apellidos_ , correo: correo_, usuario: usuario_});
							alert("Gracias "+nombre_+" su solicitud ha sido enviada.");
							$(this).dialog("close");
						
					},
                    Cancel: function(){
                    $(this).dialog("close");
                    }
                },
                close: function(){
                    allFields.val("");
                }
            });
            $("#dialog:ui-dialog").dialog("destroy");
            
            $( "#dialog-form" ).dialog({
                autoOpen: false,
				resizable: false,
				height: 300,
				width: 400,
				modal: true,
                buttons: {
                    "Ingresar": function(){
                        
							
                    },
                    Cancel: function(){
                    $(this).dialog("close");
                    }
                },
                close: function(){
                    allFields2.val("");
                }
            });
			
			$( "#dialog-save" ).dialog({
                autoOpen: false,
				resizable: false,
				height: 300,
				width: 400,
				modal: true,
                buttons: {
                    "Guardar": function(){
                        var archivo_name_= $("input#archivo_name").val();
						var contenido_ = $("#texto").val();
						var comentario_ = $("textarea#comentario").val();
							
							if($("input#marcado").is(':checked')){
							marcado_= 1;
							}
							else {
							marcado_= 0;
							}
							if($("input#etiquetado").is(':checked')){
							etiquetado_= 1;
							}
							else{
							etiquetado_=0;
							}
							host = window.location.hostname;
							url = "http://"+host+"/Tesis/index.php/controlador_archivo/guardarArchivo";
							$.post(url, {archivo_name: archivo_name_ , contenido: contenido_, marcado: marcado_ , etiquetado: etiquetado_, comentario:comentario_});
							
							$(this).dialog("close");
					
                    },
                    Cancel: function(){
                    $(this).dialog("close");
                    }
                },
                close: function(){
                    allFields3.val("");
                }
            });
			
           	$(".icono_st").button({
			icons:{
				primary:"ui-icon-pencil"
			},
			text:false
			});
			
			$(".icono_ex").button({
			icons:{
				primary:"ui-icon-comment"
			},
			text:false
			});
			
        });
		
		$(function() {
		$( "#tabs" ).tabs({
			collapsible: true
		});
		/*
		$( "#tabs2" ).tabs({
			collapsible: true
		});
		*/
		
        $( "#accordion" ).accordion({
            heightStyle: "content",
			collapsible: true,
			icons: null
        });

		$( "#tabs3" ).tabs({
			collapsible: true
		});
		
		$( "#tabs4" ).tabs({
			collapsible: true
		});
		
		$("#parrafo").toggle(function(){
			$("#parrafo").val("<p>");
			$("#parrafo").html("&lt;/p&gt;");
		},function(){
			$("#parrafo").val("</p>");
			$("#parrafo").html("Párrafo");
		});
		
		$("#oracion").toggle(function(){
			$("#oracion").val("<s>");
			$("#oracion").html("&lt;/s&gt;");
		},function(){
			$("#oracion").val("</s>");
			$("#oracion").html("Oración");
		});
		
		$(".cursiva").toggle(function(){
			$(".cursiva").val("<it>");
			$(".cursiva").html("&lt;/it&gt;");
		},function(){
			$(".cursiva").val("</it>");
			$(".cursiva").html("Cursivas");
		});
		
		$(".negritas").toggle(function(){
			$(".negritas").val("<b>");
			$(".negritas").html("&lt;/b&gt;");
		},function(){
			$(".negritas").val("</b>");
			$(".negritas").html("Negritas");
		});
		
		$(".comillas").toggle(function(){
			$(".comillas").val("<invcomm>");
			$(".comillas").html("&lt;/invcomm&gt;");
		},function(){
			$(".comillas").val("</invcomm>");
			$(".comillas").html("Comillas");
		});
		
		$(".vcfd").toggle(function(){
			$(".vcfd").val("<defcopvb lemma =\"\" pos =\"\">");
			$(".vcfd").html("&lt;/defcopvb&gt;");
		},function(){
			$(".vcfd").val("</defcopvb>");
			$(".vcfd").html("Verbo Copulativo");
		});
		
		$(".vmfd").toggle(function(){
			$(".vmfd").val("<defmetalvb lemma =\"\" pos =\"\">");
			$(".vmfd").html("&lt;/defmetalvb&gt;");
		},function(){
			$(".vmfd").val("</defmetalvb>");
			$(".vmfd").html("Verbo Metalinguistico");
		});
		
		$(".definiensd").toggle(function(){
			$(".definiensd").val("<rdefiniens>");
			$(".definiensd").html("&lt;/rdefiniens&gt;");
		},function(){
			$(".definiensd").val("</rdefiniens>");
			$(".definiensd").html("Definiens Derecha");
		});
		
		$(".definiensi").toggle(function(){
			$(".definiensi").val("<ldefiniens>");
			$(".definiensi").html("&lt;/ldefiniens&gt;");
		},function(){
			$(".definiensi").val("</ldefiniens>");
			$(".definiensi").html("Definiens Izquierda");
		});
		
		$(".definicion").toggle(function(){
			$(".definicion").val("<def typ=\"\">");
			$(".definicion").html("&lt;/def&gt;");
		},function(){
			$(".definicion").val("</def>");
			$(".definicion").html("Definicion");
		});
		
		$(".etnl").toggle(function(){
			$(".etnl").val("<defop valor=\"\">");
			$(".etnl").html("&lt;/defop&gt;");
		},function(){
			$(".etnl").val("</defop>");
			$(".etnl").html("Otros signos");
		});
		
		$(".reform").toggle(function(){
			$(".reform").val("<mkr>");
			$(".reform").html("&lt;/mkr&gt;");
		},function(){
			$(".reform").val("</mkr>");
			$(".reform").html("Reformulacion");
		});
		
		$(".ejem").toggle(function(){
			$(".ejem").val("<examkr valor=\"\">");
			$(".ejem").html("&lt;/examkr&gt;");
		},function(){
			$(".ejem").val("</examkr>");
			$(".ejem").html("Ejemplificacion");
		});
		
		$(".sino").toggle(function(){
			$(".sino").val("<syno>");
			$(".sino").html("&lt;/syno&gt;");
		},function(){
			$(".sino").val("</syno>");
			$(".sino").html("Relacion de sinonimia");
		});
				
		$(".comentario").toggle(function(){
			$(".comentario").val("<comentario valor=\"\">");
			$(".comentario").html("&lt;/comentario&gt;");
		},function(){
			$(".comentario").val("</comentario>");
			$(".comentario").html("Comentario");
		});
		
		$(".prosodia").toggle(function(){
			$(".prosodia").val("<prosodia valor=\"\">");
			$(".prosodia").html("&lt;/prosodia&gt;");
		},function(){
			$(".prosodia").val("</prosodia>");
			$(".prosodia").html("Prosodia");
		});
		
		$(".deletreo").toggle(function(){
			$(".deletreo").val("<deletr valor=\"\">");
			$(".deletreo").html("&lt;/deletr&gt;");
		},function(){
			$(".deletreo").val("</deletr>");
			$(".deletreo").html("Deletreo");
		});
		
		$(".aproximacion").toggle(function(){
			$(".aproximacion").val("<aproximd valor=\"\">");
			$(".aproximacion").html("&lt;/aproximd&gt;");
		},function(){
			$(".aproximacion").val("</aproximd>");
			$(".aproximacion").html("Aproximacion");
		});
		
		$(".frag_inint").toggle(function(){
			$(".frag_inint").val("<inintel>");
			$(".frag_inint").html("&lt;/inintel&gt;");
		},function(){
			$(".frag_inint").val("</inintel>");
			$(".frag_inint").html("Fragmento Ininteligible");
		});
		
		$(".paraverb").toggle(function(){
			$(".paraverb").val("<paraverb valor=\"\">");
			$(".paraverb").html("&lt;/paraverb&gt;");
		},function(){
			$(".paraverb").val("</paraverb>");
			$(".paraverb").html("Elem. Paraverbales");
		});
		
		$(".onomat").toggle(function(){
			$(".onomat").val("<onomat valor=\"\">");
			$(".onomat").html("&lt;/onomat&gt;");
		},function(){
			$(".onomat").val("</onomat>");
			$(".onomat").html("Onomatopeya");
		});
		
		$(".kinesic").toggle(function(){
			$(".kinesic").val("<kinesic valor=\"\">");
			$(".kinesic").html("&lt;/kinesic&gt;");
		},function(){
			$(".kinesic").val("</kinesic>");
			$(".kinesic").html("Elem. Cinesicos");
		});
		
		$(".turno_habla").toggle(function(){
			$(".turno_habla").val("<u valor=\"\" >");
			$(".turno_habla").html("&lt;/u&gt;");
		},function(){
			$(".turno_habla").val("</u>");
			$(".turno_habla").html("Turno de Habla");
		});
		
		$(".overlap").toggle(function(){
			$(".overlap").val("<overlap valor=\"\" >");
			$(".overlap").html("&lt;/overlap&gt;");
		},function(){
			$(".overlap").val("</overlap>");
			$(".overlap").html("Voz superpuesta");
		});
		
		$( "#dialog1" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".cursiva_st" ).click(function() {
			$( "#dialog1" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog2" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".negritas_st" ).click(function() {
			$( "#dialog2" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog3" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".comillas_st" ).click(function() {
			$( "#dialog3" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog4" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".vcfd_st" ).click(function() {
			$( "#dialog4" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog5" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".vmfd_st" ).click(function() {
			$( "#dialog5" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog6" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".definiensd_st" ).click(function() {
			$( "#dialog6" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog7" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".definiensi_st" ).click(function() {
			$( "#dialog7" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog8" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".definicion_st" ).click(function() {
			$( "#dialog8" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog9" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".etnl_st" ).click(function() {
			$( "#dialog9" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog10" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".reform_st" ).click(function() {
			$( "#dialog10" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog11" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".ejem_st" ).click(function() {
			$( "#dialog11" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog12" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".sino_st" ).click(function() {
			$( "#dialog12" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog13" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".cursiva_ex" ).click(function() {
			$( "#dialog13" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog14" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".negritas_ex" ).click(function() {
			$( "#dialog14" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog15" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".comillas_ex" ).click(function() {
			$( "#dialog15" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog16" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".vcfd_ex" ).click(function() {
			$( "#dialog16" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog17" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".vmfd_ex" ).click(function() {
			$( "#dialog17" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog18" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".definiensd_ex" ).click(function() {
			$( "#dialog18" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog19" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".definiensi_ex" ).click(function() {
			$( "#dialog19" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog20" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".definicion_ex" ).click(function() {
			$( "#dialog20" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog21" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".etnl_ex" ).click(function() {
			$( "#dialog21" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog22" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".reform_ex" ).click(function() {
			$( "#dialog22" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog23" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".ejem_ex" ).click(function() {
			$( "#dialog23" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog24" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( ".sino_ex" ).click(function() {
			$( "#dialog24" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog25" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#ces_header_st" ).click(function() {
			$( "#dialog25" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog26" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#file_desc_st" ).click(function() {
			$( "#dialog26" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog27" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#title_stmt_st" ).click(function() {
			$( "#dialog27" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog28" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#h_title_st" ).click(function() {
			$( "#dialog28" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog29" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#publication_stmt_st" ).click(function() {
			$( "#dialog29" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog30" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#pub_address_st" ).click(function() {
			$( "#dialog30" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog31" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#pub_date_st" ).click(function() {
			$( "#dialog31" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog32" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#source_desc_st" ).click(function() {
			$( "#dialog32" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog33" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#bibl_struct_st" ).click(function() {
			$( "#dialog33" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog34" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#monogr_st" ).click(function() {
			$( "#dialog34" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog35" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#analytic_st" ).click(function() {
			$( "#dialog35" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog36" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#h_author_st" ).click(function() {
			$( "#dialog36" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog37" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#imprint_st" ).click(function() {
			$( "#dialog37" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog38" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#pub_place_st" ).click(function() {
			$( "#dialog38" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog39" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#creation_st" ).click(function() {
			$( "#dialog39" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog40" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#lang_usage_st" ).click(function() {
			$( "#dialog40" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog41" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#language_st" ).click(function() {
			$( "#dialog41" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog42" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#wsd_usage_st" ).click(function() {
			$( "#dialog42" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog43" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( "#writing_system_st" ).click(function() {
			$( "#dialog43" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog44" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".comentario_st" ).click(function() {
			$( "#dialog44" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog45" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".prosodia_st" ).click(function() {
			$( "#dialog45" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog46" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".deletreo_st" ).click(function() {
			$( "#dialog46" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog47" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".aproximacion_st" ).click(function() {
			$( "#dialog47" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog48" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".frag_inint_st" ).click(function() {
			$( "#dialog48" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog49" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".paraverb_st" ).click(function() {
			$( "#dialog49" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog50" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".onomat_st" ).click(function() {
			$( "#dialog50" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog51" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".kinesic_st" ).click(function() {
			$( "#dialog51" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog52" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".turno_habla_st" ).click(function() {
			$( "#dialog52" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog53" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".overlap_st" ).click(function() {
			$( "#dialog53" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog54" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".comentario_ex" ).click(function() {
			$( "#dialog54" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog55" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".prosodia_ex" ).click(function() {
			$( "#dialog55" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog56" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".deletreo_ex" ).click(function() {
			$( "#dialog56" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog57" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".aproximacion_ex" ).click(function() {
			$( "#dialog57" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog58" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".frag_inint_ex" ).click(function() {
			$( "#dialog58" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog59" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".paraverb_ex" ).click(function() {
			$( "#dialog59" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog60" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".onomat_ex" ).click(function() {
			$( "#dialog60" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog61" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".kinesic_ex" ).click(function() {
			$( "#dialog61" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog62" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".turno_habla_ex" ).click(function() {
			$( "#dialog62" ).dialog( "open" );
			return false;
		});
		
		$( "#dialog63" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
		
		$( ".overlap_ex" ).click(function() {
			$( "#dialog63" ).dialog( "open" );
			return false;
		});
		
		$(".etiq_bot").click(function() {
			var valor = devPos();
			var text = null;
			var text1 = null;
			var text2 = null;
			
			$text = $("#texto").val();
			
			
			$text1 = $text.substring(0,valor);
			$text2 = $text.substring(valor,$text.lenght);
			
			
			$("#texto").val($text1+$(this).val()+$text2);
	
		});
		
		$(".metadatos_bot").click(function(){
			var $text = null;
			var $text1 = null;
			
			$text = $("#texto").val();
			$text1 = $(this).val();
			
			$("#texto").val($text1+$text);
			
		
		});
		
		});