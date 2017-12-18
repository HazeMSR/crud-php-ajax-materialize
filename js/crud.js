$(document).ready(function(e) {
	$(".modal").modal();
	$("#modalFormUpd #sexo").material_select();
	$("#nvoEst").on("click",function(){
		$("#modalFormIns #sexo").material_select();
		$("#modalFormIns").modal("open");
	});
		
    $(".eliminar").click(function(e) {
        var curpDel = $(this).data("eliminar");
        console.log("curp: ");
        console.log(curpDel);
    
		$.confirm({
			title:"SEE",
			content:"Desea eliminar el registro de la curp: "+curpDel,
			type:"blue",
			useBootstrap:false,
			boxWidth:"50%",
			buttons:{
				confirm:function(){
					$.ajax({
						method:"post",
						url:"delete_AX.php",
						cache:false,
						data:{curp:curpDel},
						success:function(respAX){
							if(respAX == 1){
								$.alert({
									title:"SEE",
									content:"El registro se elimin&oacute; correctamente",
									type:"green",
									useBootstrap:false,
									boxWidth:"50%",
									onClose:function(){
										location.reload(true);
									}
								})
							}else{
								$.alert({
									title:"SEE",
									content:"Se presentaron problemas en la operación: "+respAX,
									type:"red",
									useBootstrap:false,
									boxWidth:"50%"
								})
							}
						}
					})
				},
				cancel:function(){
					//
				}
			}
		})
    });
	
	$(".editar").click(function(e) {
        var curpUpd = $(this).attr("data-editar");
		$.ajax({
			method:"post",
			url:"loadUpd_AX.php",
			data:{curp:curpUpd},
			cache:false,
			success: function(respAX){
				var infcurp = JSON.parse(respAX);
				$("#formUpd #curp").val(infcurp.curp);
				$("#formUpd #nombre").val(infcurp.nombre);
				$("#modalFormUpd #primerApe").val(infcurp.primerApe);
				$("#modalFormUpd #segundoApe").val(infcurp.segundoApe);
				$("#modalFormUpd #sexo").val(infcurp.sexo);
				$("#modalFormUpd #correo").val(infcurp.correo);
				$("#modalFormUpd #sexo").material_select();
				Materialize.updateTextFields();
				$("#modalFormUpd").modal("open");
			}
		})
    });
		
	$(".ver").click(function(e) {
        var curpVer = $(this).attr("data-ver");
        console.log(curpVer);
		$.ajax({
			method:"post",
			url:"read_AX.php",
			cache:false,
			data:{curp:curpVer},
			success: function(respAX){
				var obj = JSON.parse(respAX);
				var genero = obj.genero;
				var turno = obj.turno;
				
				if(genero=="M")
					genero = "fa-male";
				else{
					if( genero == "F" )
						genero = "fa-female";
					else
						genero = "fa-question";
				}

				if( turno == "V" )
					turno = "fa-moon-o";
				else{
					if( turno == "M" )
						turno = "fa-sun-o";
					else
						turno = "fa-star-half-o";
				}

				var cadenaHTML = 
				"<p class='flow-text'>"+
					"<i class='fa fa-address-card blue-text'></i>  <b>CURP:</b> "+obj.curp+
					"<br><i class='fa fa-user-circle-o blue-text'></i>  <b>Periodo de Ingreso:</b> "+obj.ingreso+
					"<br><i class='fa fa-flag blue-text'></i>  <b>Carrera:</b> "+obj.carrera+
					"<br><i class='fa fa-file-excel-o blue-text'></i>  <b>Plan:</b> "+obj.plan+
					"<br><i class='fa fa-bullseye blue-text'></i>  <b>Especialidad:</b> "+obj.especialidad+
					"<br><i class='fa fa-calculator blue-text'></i>  <b>Cr&eacute;ditos:</b> "+obj.creditos+
					"<br><i class='fa fa-check-square-o blue-text'></i>  <b>Cr&eacute;ditos Inscritos:</b> "+obj.creditosinscritos+
					"<br><i class='fa fa-pencil-square-o blue-text'></i>  <b>Promedio:</b> "+obj.promedio+
					"<br><b> Turno: </b> <i class='fa "+turno+" blue-text'></i> "+
					"<br><i class='fa fa-calendar-times-o blue-text'></i>  <b>Semestre:</b> "+obj.semestre+
					"<br><b> Genero: </b> <i class='fa "+genero+" blue-text'></i> "+
					"<br><i class='fa fa-sort-amount-desc blue-text'></i>  <b>Edad:</b> "+obj.edad+
					"<br><i class='fa fa-hourglass-end blue-text'></i>  <b>Fecha de Nacimiento:</b> "+obj.fechanac+
					"<br><i class='fa fa-phone blue-text'></i>  <b>Telefono:</b> "+(obj.telefono==null?" ":obj.telefono)+
					"<br><i class='fa fa-phone-square blue-text'></i>  <b>Movil:</b> "+(obj.movil==null?" ":obj.movil)+
					"<br><i class='fa fa-envelope blue-text'></i>  <b>E-mail:</b> "+(obj.email==null?" ":obj.email)+
					"<br><i class='fa fa-envelope blue-text'></i>  <b>E-mail:</b> "+ obj.email +
					"</p>";
				$("#respAX").html(cadenaHTML);
				$("#modalAX").modal("open");
			}
		});
    });
	
	$("#modalFormUpd").validetta({
		bubblePosition:"bottom", bubbleGapTop:10, bubbleGapLeft:-5,
		onValid:function(e){
			e.preventDefault();
			$("#modalFormUpd").modal("close");
			$.ajax({
				method:"post",
				url:"update_AX.php",
				data:$("#formUpd").serialize(),
				cache:false,
				success: function(respAX){
					if(respAX == 1){
						$.alert({
							title:"SEE",
							content:"Se actualizó correctamente el registro seleccionado",
							type:"green",
							useBootstrap:false,
							boxWidth:"50%",
							onClose:function(){
								location.reload(true);
							}
						});
					}else{
						$.alert({
							title:"SEE",
							content:"No se pudo actualizar el registro. Vuelva a intentarlo: "+respAX,
							type:"red",
							useBootstrap:false,
							boxWidth:"50%"
						});
					}
				}
			})
		}
	});
	
	$("#modalFormIns").validetta({
		bubblePosition:"bottom", bubbleGapTop:10, bubbleGapLeft:-5,
		onValid:function(e){
			e.preventDefault();
			$("#modalFormIns").modal("close");
			$.ajax({
				method:"post",
				url:"create_AX.php",
				data:$("#formIns").serialize(),
				cache:false,
				success: function(respAX){
					if(respAX == 1){
						$.alert({
							title:"SEE",
							content:"Se agregó correctamente el estudiante",
							type:"green",
							useBootstrap:false,
							boxWidth:"50%",
							onClose:function(){
								location.reload(true);
							}
						});
					}else{
						if(respAX == 2){
							$.alert({
								title:"SEE",
								content:"No se pudo insertar el registro en los alumnos. Intente con otro CURP.",
								type:"red",
								useBootstrap:false,
								boxWidth:"50%"
							});
						}
						else{
							$.alert({
								title:"SEE",
								content:"No se pudo insertar el registro en los usuario. Intente con otro usuario. ",
								type:"red",
								useBootstrap:false,
								boxWidth:"50%"
							});
						}
					}
				}
			})
			console.log(respAX);
		}
	});


});