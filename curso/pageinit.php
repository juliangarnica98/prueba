
<?php include "../layout/header.php" ?>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <div id="all">
        
        <!--<iframe class="animate__animated animate__zoomInDown" width="660" height="415" src="https://www.youtube.com/embed/1juekpGTyX8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
    </div>
    <div class="container" style="padding-top:200px;">
        <div class="row">
        
            <div class="col-12 text-center pb-4">
                <h1 style="color: #fff;" class="h1-init animate__animated animate__zoomIn"><b> ¿Qué es el ciclo de vida del software?</b></h1>
                <figure>
                    <img class="animate__animated animate__repeat-3 animate__rubberBand" src="https://static.wixstatic.com/media/fd2cc9_128a79ff8412496d9ee11d4a22d5e286~mv2.png/v1/fill/w_740,h_492,al_c,q_95/fd2cc9_128a79ff8412496d9ee11d4a22d5e286~mv2.webp" alt="Texto alternativo" width="300" height="200">
                    <figcaption style="color: #fff;" class=" animate__animated animate__jackInTheBox"><b>El término ciclo de vida del software describe el desarrollo de software, desde la fase inicial hasta la fase final. El propósito de este programa es definir las distintas fases intermedias que se requieren para validar el desarrollo de la aplicación, es decir, para garantizar que el software cumpla los requisitos para la aplicación y verificación de los procedimientos de desarrollo: se asegura de que los métodos utilizados son apropiados.</b> <figcaption>
                </figure>
				
			</div>
        </div>
        <div class="row">
        <div class="col-12 text-center pb-4">
			
			</div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
        window.onload = function(){
            setInterval(function(){
                var contenedor = document.getElementById('contenedor_carga');
                contenedor.style.visibility = 'hidden';
                contenedor.style.opacity = '0'; 
            }, 1500);
        };
        
        
        $('button').on('click', function(e){
            e.preventDefault();
            $(this).toggleClass('is-expanded');
        })
    </script>
</body>
</html>