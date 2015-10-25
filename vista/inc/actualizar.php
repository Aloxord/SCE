<div class="container-fluid">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<div class="cuadrocentral">
				<form action="./modelo/consulta.php" method="post" class="form-horizontal" role="form">
					<fieldset>
						<legend>Actualizar estudiante</legend>
						<br>
						<div class="form-group">
							<label class="control-label col-xs-2">Cedula:</label>
							<div class="col-xs-8">
							<input class="form-control" type="text" id="cedula">
							</div>
							<br>
							<button type="submit" class="btn btn-info">Buscar</button>
						</div>
						<script type="text/javascript">
						/*Evento que se encarga de capturar el momento en que se va a enviar los datos
						del formulario*/
						$("form").submit(function(e){
							/*Esta funcion evita que el html haga sus funciones preestablecidas
							y da mayor control sobre que hacer con el evento*/
							e.preventDefault();
							/*capturo los datos de los formularios, para enviarlos posteriormente
							en este caso, la variable url, captura el atributo 'action' del form
							donde se encuentra la direccion a donde seran enviados.*/
							var url = $("form").attr("action");
							/*creo un Json con los datos de los formularios.*/
							var datos = {

										"cedula": $("#cedula").val(),

										}
							/*oculto el formulario para darle espacio a la respuesta!*/
							$("form").hide("slow");
							/*y envio los datos mediante ajax, la funcion de ajax, recibe tres parametros
							en formato Json: el tipo de envio de datos, la url a la que lo enviara
							y una funcion que recibe la respuesta del servidor, y se ejecuta con ellos.*/
							$.ajax({
								type:"POST",
								url:url,
								data:datos,
								success:function(res){
									if (res!="") {
										var docu = "<table class='table table-bordered'><caption>Datos del estudiante:</caption><thead><tr><th>Cédula</th><th>Nombres</th><th>Apellidos</th></tr></thead><tbody><tr><td>"+res.cod_est+"</td><td>"+res.nombres+"</td><td>"+res.apellido1+" "+res.apellido2+"</td></tr></tbody></table><div class='extra'></div>";
										$(".cuadrocentral").html(docu);
										$(".extra").load("vista/inc/actualizar-1.php");
								}else{
									alert("no encontrado");
								}
							}
							});
						});
						</script>
					</fieldset>
				</form>
				
			</div>

		</div>
	</div>
</div>