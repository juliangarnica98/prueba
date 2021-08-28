
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prueba tecnica</title>
	<link rel="icon" type="image/png" href="img/book.png" />
	<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/preload.css" media="screen" />
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	
	
</head>
<body>
	<div id="contenedor_carga">
        <div id="carga"></div>
    </div>
	<div class="init padt-init">
		<div class="container">
			<div class="row d-flex justify-content-center ">
				<div class="col-12 text-center pb-4">
					<h1 class="h1-init animate__animated animate__bounce animate__repeat-2"><b>Ciclo de vida del software</b></h1>
					<button onclick="location.href='curso/pageinit.php';" class="bton mt-4">Comenzar curso</button>
				</div>
			</div>		
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script>
		window.onload = function(){
            setInterval(function(){
                var contenedor = document.getElementById('contenedor_carga');
                contenedor.style.visibility = 'hidden';
                contenedor.style.opacity = '0'; 
            }, 500);
        };
	</script>

</body>
</html>