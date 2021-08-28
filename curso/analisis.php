
<?php include "../layout/header.php" ?>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <div class="container" style="padding-top:75px;">
        
        <div class="row">
            <div class="col-12 text-center ">
            <h1 style="color: #fff; " class="text-center h1-init animate__animated animate__repeat-3 animate__rubberBand"><b> Análisis</b></h1>
                <iframe class="text-center h1-init animate__animated animate__rubberBand" width="660" height="415" src="https://www.youtube.com/embed/5tyU_h69F-s?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>       
        </div>
        <div class="row" style="color: #fff; padding-top:25px;">
            
            <div class="col-6 text-center pb-4">
                <button type="button" class="btn-lg btn-warning animate__animated animate__rotateInUpRight" data-toggle="modal" data-target="#modalsignificado">¿Qué es el análisis? &nbsp;<i class="fas fa-laptop-code"></i></button>
				
			</div>
            <div class="col-6 text-center pb-4">
                <button type="button" class="btn-lg btn-warning animate__animated animate__rotateInDownLeft" data-toggle="modal" data-target="#modalejemplo">Ejemplo &nbsp;<i class="fas fa-chalkboard-teacher"></i></button>
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
            <p>Una vez que el proveedor de TI tiene toda la información y los requisitos de su lado, comienza la planificación. Ahora es el momento de tomar toda esa información útil, analizarla y elaborar un plan sólido y funcional.</p> 
            <p>Esta parte generalmente es llevada a cabo por miembros de alto nivel acompañados por el gerente del proyecto o CTO. Juntos, deben tomar en consideración todos los puntos anteriores hechos por el cliente y realizar un análisis profundo con respecto a la viabilidad del proyecto, los factores técnicos, económicos, funcionales y operativos que podrían hacer que este proceso tenga éxito o fracase.</p>
            <p>Una vez que se hayan atendido todos estos puntos, deberían terminar con un plan de acción adecuado que describa en profundidad cómo se llevarán a cabo con el proyecto, las diferentes etapas que atravesará, las tecnologías que usarán, etc.</p>
            <p>Algunas empresas dividen este paso en un tercero, en el que crean un documento SRS, también conocido como documento de Especificación de requisitos de software, que incluye y documenta todos los requisitos y el comportamiento esperado de una solución de software específica. Sin embargo, incluiremos este paso como parte de la fase 2.</p>

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
                   <img src="../img/analisis.png" alt="ejemplo de requisito" height="300px" width="450px">
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