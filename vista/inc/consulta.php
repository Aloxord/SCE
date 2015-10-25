<div class="container-fluid">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<div class="cuadrocentral">
				<form action="./modelo/consulta.php" method="post" class="form-horizontal" role="form">
					<fieldset>
						<legend>Consulta de estudiante</legend>
						<br>
						<div class="form-group">
							<label class="control-label col-xs-2 col-xs-offset-1">Cedula:</label>
							<div class="col-xs-6 ">
							<input class="form-control" type="text" id="cedula">
							</div>
							<br>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2 col-xs-offset-1">Apellido:</label>
							<div class="col-xs-6 ">
							<input class="form-control" type="text" id="apellido">
							</div>
							<br>
						</div>
						<center><button type="submit" class="btn btn-info">Buscar</button></center>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

					$("form").submit(function(e){
						e.preventDefault();
						
						var url = $("form").attr("action");
						if ($("#cedula").val() != "") {
							var datos = {

									"cedula": $("#cedula").val(),

				
								};
							}else{
									var datos = {

									"apellido": $("#apellido").val(),

									};
								};
						

						$("form").hide("slow");
						$.ajax({
							type:"POST",
							url:url,
							data:datos,
							success:function(res){
								
								if (res!=""){
									if (res.nombres == undefined) {
										var docu = "<table class='table table-bordered'><caption>Datos del estudiante:</caption><thead><tr><th>Cédula</th><th>Nombres</th><th>Apellidos</th></tr></thead><tbody></tbody></table><center><div class='btn-group'><h3>Generar constancia:</h3><button class='btn btn-info btn-lg'>Inscripcion</button><button onclick='alert(\"hola mundo\")' class='btn btn-info btn-lg'>Conducta</button><button class='btn btn-info btn-lg'>Retiro</button></div></center>";
										$(".cuadrocentral").html(docu);
										var resul = "";
										var i =0;
										for(i in res){
											resul = resul.concat("<tr><td>"+res[i].cod_est+"</td><td>"+res[i].nombres+"</td><td>"+res[i].apellido1+" "+res[i].apellido2+"</td></tr>");
										}
										$(resul).appendTo("tbody");
									} else{
									 	var docu = "<table class='table table-bordered'><caption>Datos del estudiante:</caption><thead><tr><th>Cédula</th><th>Nombres</th><th>Apellidos</th></tr></thead><tbody><tr><td>"+res.cod_est+"</td><td>"+res.nombres+"</td><td>"+res.apellido1+" "+res.apellido2+"</td></tr></tbody></table><center><div class='btn-group'><h3>Generar constancia:</h3><button class='btn btn-info btn-lg'>Inscripcion</button><button onclick='alert(\"hola mundo\")' class='btn btn-info btn-lg'>Conducta</button><button class='btn btn-info btn-lg'>Retiro</button></div></center>";
										$(".cuadrocentral").html(docu);
									}
								}else{
									alert("no encontrado");
								}
							}

						});

					});
					$("#conducta").click(function(){
						alert(res.nombres);
					});
						</script>