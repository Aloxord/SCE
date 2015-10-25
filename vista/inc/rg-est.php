<div class="container-fluid">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<form action="./modelo/registro.php" method="post" name="formul" role="form">
				<fieldset>
					<legend>Registro de Estudiante</legend>
					<div class="form-group">
						<label class="control-label" for="nombre_est">Nombres:</label>
						<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombres del estudiante" >
					</div>
					<div class="form-group">
						<label class="control-label" for="apellido_est">Primer apellido:</label>
						<input class="form-control" type="text" name="apellido1" placeholder="Apellidos del estudiante">
					
					</div>
					<div class="form-group">
						<label class="control-label" for="apellido_est">Segundo apellido:</label>
						<input class="form-control" type="text" name="apellido2" placeholder="Apellidos del estudiante">
					
					</div>
					<div class="form-group">
						<label class="control-label" for="ced_est">Cédula:</label>
						<input class="form-control" type="text" id="ced" name="ced_est" placeholder="Cédula del estudiante">
						
					</div>
					<div class="form-group">
					<label class="control-label" for="fecha_nac">Fecha de Nacimiento:</label>
					<input class="form-control" type="date" name="fecha_nac" >
					
					</div>
					<div class="form-group">
						<label class="control-label" for="lugar_nac">Lugar de Nacimiento:</label>
						<input class="form-control" type="text" name="lugar_nac" >
					</div>
					<button class="btn btn-info" >Registrar</button>
					<script type="text/javascript">

					
					$("#ced").keyup(function(){
						var ced = $("#ced").val();
						$.ajax({
							type:"POST",
							url:"./modelo/verifi.php",
							data:{"cedula":ced},
							success:function(res){
								console.log(res);
								if (res==1) {
									$("#ced").css("border","1px solid red");
									$("button").attr("disabled","disabled");
								}else{
									$("#ced").css("border","1px solid green");
									$("button").removeAttr("disabled");
								}
							}
						});
					});
					$("form").submit(function(e){
						e.preventDefault();

						var en = 0;
						$("input").each(function(){
							
							var len = $(this).length;
							if (len<1) {
								en++;
							}
						});
						console.log(en);
						if (en>0) {
							alert("No puede dejar los campos en blanco");
						} else{
						var url = $("form").attr("action");
						var datos = {

									"nombre": $("#nombre").val(),
									"apellido1": document.formul.apellido1.value,
									"apellido2": document.formul.apellido2.value,
									"cedula": document.formul.ced_est.value,
									"fecha": document.formul.fecha_nac.value,
									"lugar": document.formul.lugar_nac.value,

									}

						$("form").hide("slow");
						$.ajax({
							type:"POST",
							url:url,
							data:datos,
							success:function(res){
								if (res==1){
									$("#success").show("slow");
									setTimeout(
										$("#success").hide("slow",function(){
										$("#contenido").load("vista/inc/rg-est.php");
									})
										,9000);
									
									
								}else{
									$("#error").show("slow");
								}
						}
						});
					}
					});

					</script>
				</fieldset>
			</form>
			<div id="success" class="info"><h2>Registrado con exito!</h2></div>
			<div id="error" class="info"><h2>Registrado fallo.</h2></div>
		</div>
	</div>
</div>