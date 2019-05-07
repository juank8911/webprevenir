<!-- <script src='js/bootstrap-validate.js'></script> -->


<div class="row">
	
	<div class=col-md-12>
		<img src="images/prevenir/familia.jpg" style="max-width: 100%; padding-top: 50px; width: 100%;">
	</div>

</div>

<div class="contenido"> 

	<div class="row"> 
		<div class=col-md-1></div>
		<div class="col-md-10"> 
			<h2 class="text-center tituloPrincipal">Contáctenos y PQRSF</h2>
		</div>
		<div class=col-md-1></div>
	</div>




	<div class="row"> 
		<div class=col-md-1></div>
		<div class="col-md-6"> 
			<h2 class="Subtitulo">Ubícanos</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9164877555468!2d-77.28278048524612!3d1.2182381991114328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x47077d9318e8e630!2sGRUPO+PREVENIR+EXPRESS+SAS.!5e0!3m2!1ses-419!2sco!4v1554733108210!5m2!1ses-419!2sco" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-4"> 
			<h2 class="Subtitulo" style="text-align: left !important;"> Nuestras Sedes</h2>
			<ul class="rss" style="padding-top: 10px">
				<li>Carrera 29 NO. 17-89 Segundo Piso Diagonal Camara de Comercio <br/>
					Pasto - Nariño <br/>
					Teléfonos: (2) 7290038<br/>
					+57 310 435 1937 - +57 317 264 5522<br/>
				clientes@prevenirexpress.com</li>
				<br/>
				<li>Centro Empresarial Saya. Local 204 <br/>
					Cra. 8 No. 5-70 Altos De Prevenir  <br/>
					Mocoa - Putumayo<br/>
					Teléfonos: (2) 7209417 - +57 310 435 1937 - +57 317 264 5522<br/>
				clientes@prevenirexpress.com</li>
				<br/>
				<li>Cra.7 No. 6-41 Popayan - Cauca. <br/>
					Teléfonos: (2) 7290038 - +57 310 435 1937 - +57 317 264 5522<br/>
				clientes@prevenirexpress.com</li>
				

			</ul> 
		</div>
		<div class=col-md-1></div>
	</div>
	<br/>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-6"> 
			<h1 class="Subtitulo ">Envíanos tus comentarios</h1>
			<br/>
			<form id="form1" data-toggle="validator" role="form">
				<div class="form-group">
					<label for="name">Nombre Completo</label>
					<input type="text" class="form-control" name="name" id="name" >
					<span class="help-block"> </span>
				</div>
				<div class="form-group">
					<label for="identification">Cédula</label>
					<input type="text" class="form-control" name="identification" id="identification" >
				</div>
				<div class="form-group">
					<label for="email">Correo Electrónico:</label>
					<input id="mail" type="email" class="form-control" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$" name="mail">
				</div>
				<div class="form-group">
					<label for="tel">Teléfono:</label>
					<input type="number" class="form-control" pattern="[0-9]*" name="tel" id="tel" >
				</div>

				<div class="row">
					
					<div class="col-md-6">	
						<div class="form-group">
							<label for="Depa">Departamento:</label>
							<input type="text" class="form-control" name="Depa" id="Depa" >

						</div>
					</div>
					<div class="col-md-6">	
						<div class="form-group ">
							<label for="Mun">Municipio:</label>
							<input type="text" class="form-control" name="Mun" id="Mun" >

						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">	
						<div class="form-group">
							<label for="asunto">Asunto:</label>
							<input type="text" class="form-control" name="asunto" id="asunto" ></textarea>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">	
						<div class="form-group">
							<label for="mensaje">Mensaje:</label>
							<textarea class="form-control" name="mensaje" id="mensaje" ></textarea>

						</div>
					</div>
				</div>

				
				<input type="button" value="Enviar" id="Save" class="btn btn-primary"></input>
			</form>
		</div>
		<div class="col-md-4">
			<img src="images/prevenir/gifangel_2.gif" alt="Prevenir Express lineas de emergencia funeraria" style="max-width: 100%; width: 100%; display: block; margin: auto;">	
		</div>
		<div class="col-md-1"></div>	
	</div>
</div>

<!-- <script type="text/javascript">
	$(document).on("ready", inicio);

	function inicio(){
		$("span.help-block").hide();
		$("#Save").click(validar);
	}

	window.onload = function validar(){
		alert("Enviar");
	}
</script>
 -->

 <!-- <script type="text/javascript">
 	
bootstrapValidate('#mail', 'email:Enter a valid E-Mail!');

 </script>
 -->

<script>



	$(document).ready(function () {
		$("#Save").click(function () {
			var mail = new Object();
			mail.name = $('#name').val();
			mail.identification = $('#identification').val();
			mail.mail = $('#mail').val();
			mail.tel = $('#tel').val();
			mail.Depa = $('#Depa').val();
			mail.Mun = $('#Mun').val();
			mail.asunto = $('#asunto').val();
			mail.mensaje = $('#mensaje').val();

			$("span.help-block").hide();
			

			var valor = document.getElementById("name").value;
			// if(valor == null || valor.length == 0 || /^\s+$/.test(valor))
			// {
			// 	return false;
			// }
			
			console.log(mail);

			$.ajax({
				url: 'http://192.168.2.108:3300/emails',
				type: 'POST',
				dataType: 'json',
				data: JSON.stringify(mail),
				contentType: 'application/json; charset=utf-8',
				dataType: 'json',
				success: function (data, textStatus, xhr) {

					var respuesta = data[0];

					console.log(respuesta[0]);
					
					

					
					if(data[0].send == "si")
					{
						console.log('Entro');
						alert("Sus datos fueron enviados exitosamente"); 
					}
				},
				error: function (xhr, textStatus, errorThrown) {
					console.log('Error in Operation');
					alert("Existen errores");
				}
			});
		});
	});
</script>