<link rel="stylesheet" href="../../css/styleNav.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="width: 1920px ; height: 1080px; background-color: #00aeef">

			<div class="row">
				
				<div class="col-md-3">
					<div id="circulo3D">
						<div id="tituloCirculo">
							<figure><img src="../../images/prevenir/circulo1.png" style="max-width: 100%;padding-top: 50px;  width: 100%;"></figure>
							<figure class="back"><img src="../../images/prevenir/circulo5.png" style="max-width: 100%;padding-top: 50px;  width: 100%;"><h1 class="centrado">Prevención Excequial</h1></figure>
						</div>
					</div>

				</div>
				<div class="col-md-3">
					<div id="circulo3D">
						<div id="tituloCirculo">
							<figure><img src="../../images/prevenir/circulo2.png" style="max-width: 100%;padding-top: 50px;  width: 100%;"></figure>
							<figure class="back"><img src="../../images/prevenir/circulo6.png" style="max-width: 100%;padding-top: 50px;  width: 100%;"><h1 class="centrado">Prevenir Medico</h1></figure>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div id="circulo3D">
							<div id="tituloCirculo">
								<figure><img src="../../images/prevenir/circulo3.png" style="max-width: 100%;padding-top: 50px;  width: 100%;"></figure>
								<figure class="back"><img src="../../images/prevenir/circulo7.png" style="max-width: 100%;padding-top: 50px;  width: 100%;"><h1 class="centrado">Prevenir Optica</h1></figure>
							</div>
						</div>
				</div>
				<div class="col-md-3">
					<div id="circulo3D">
							<div id="tituloCirculo">
								<figure><img src="../../images/prevenir/circulo4.png" style="max-width: 100%;padding-top: 50px;  width: 100%;"></figure>
								<figure class="back"><img src="../../images/prevenir/circulo7.png" style="max-width: 100%;padding-top: 50px;  width: 100%;"><h1 class="centrado">Prevenir Fundación</h1></figure>
							</div>
						</div>
				</div>


			</div>
		</div>
	</div>
</div>


<style type="text/css">
	#circulo3D{
		width: 400px;
		height: 400px;
		perspective: 750px;
	}
	#tituloCirculo{
		width: 100%;
		height: 100%;
		position: absolute;
		transform-style: preserve-3d;
		transition: transform 500ms ease-in-out;
	}

	#circulo3D:hover #tituloCirculo{
		transform: rotateY(180deg);
	}

	figure{
		position: absolute;
		width: 100%;
		height: 100%;
		backface-visibility: hidden;
	}

	figure.back{
		transform: rotateY(180deg);
	}
	.centrado{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: white;
		text-align: center;
		font-family: 'Raleway', sans-serif;
	}

</style>