
<?php include "../layout/header.php" ?>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <div class="container" style="padding-top:75px;">
        
        <div class="row">
            <div class="col-12 text-center ">
            <h1 style="color: #fff; " class="text-center h1-init animate__animated animate__repeat-3 animate__rubberBand"><b> Pruebas</b></h1>
                
                <iframe class="text-center h1-init animate__animated animate__rubberBand" width="660" height="415" src="https://www.youtube.com/embed/F0x2XVCaapk?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>       
        </div>
        <div class="row" style="color: #fff; padding-top:25px;">
            
            <div class="col-6 text-center pb-4">
                <button type="button" class="btn-lg btn-info animate__animated animate__rotateInUpRight" data-toggle="modal" data-target="#modalsignificado">¿Qué son las pruebas? &nbsp;<i class="fas fa-laptop-code"></i></button>
				
			</div>
            <div class="col-6 text-center pb-4">
                <button type="button" class="btn-lg btn-info animate__animated animate__rotateInDownLeft" data-toggle="modal" data-target="#modalejemplo">Ejemplo &nbsp;<i class="fas fa-chalkboard-teacher"></i></button>
				<!--<h1 style="color: #fff;" class="h1-init animate__animated animate__repeat-3 animate__rubberBand"><b> ¿Qué es el ciclo de vida del software?</b></h1>-->
			</div>
        </div>
        
    </div>
    <div class="modal fade" id="modalsignificado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripción</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p>Una vez que finaliza la parte de desarrollo, el proveedor de servicios de outsourcing debe comenzar a probar la solución de software en varias plataformas de prueba diferentes para asegurarse de que todas las características estén funcionando como deberían.</p>
            <p>Durante esta etapa, el control de calidad comprobará cada parte del software, lo ejecutará en diferentes plataformas, comprobará cómo responde a las integraciones y lo usará como si fuera el usuario final.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">¡Ya se lo suficiente!</button>
                
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalejemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ejemplo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <figure>
                   <img src="../img/pruebas.jpg" alt="ejemplo de requisito" height="300px" width="450px">
               </figure>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">¡Ya se lo suficiente!</button>
                
            </div>
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