
<?php include "../layout/header.php" ?>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <div class="container" style="padding-top:75px;">
        
        <div class="row">
            <div class="col-12 text-center ">
            <h1 style="color: #fff; " class="text-center h1-init animate__animated animate__repeat-3 animate__rubberBand"><b> Requisitos</b></h1>
                <iframe class="text-center h1-init animate__animated animate__rubberBand" width="660" height="415" src="https://www.youtube.com/embed/gagdT0gJyqA?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
            </div>       
        </div>
        <div class="row" style="color: #fff; padding-top:25px;">
            
            <div class="col-6 text-center pb-4">
                <button type="button" class="btn-lg btn-primary animate__animated animate__rotateInUpRight" data-toggle="modal" data-target="#modalsignificado">¿Qué son lo requisitos? &nbsp;<i class="fas fa-laptop-code"></i></button>
				
			</div>
            <div class="col-6 text-center pb-4">
                <button type="button" class="btn-lg btn-primary animate__animated animate__rotateInDownLeft" data-toggle="modal" data-target="#modalejemplo">Ejemplo &nbsp;<i class="fas fa-chalkboard-teacher"></i></button>
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
               <p>Este es el primer paso en cualquier proyecto de desarrollo de software, y se basa en la recopilación de todos los requisitos vitales con respecto a la propia solución de software para poder crear un plan de acción.</p>
               <p>Es durante esta etapa que la compañía offshore o nearshore se toma el tiempo de anotar toda la información importante sobre el alcance del proyecto. Por lo general, las empresas hacen esto de dos maneras principales:</p>
               <p>Uno, organizando una reunión en la que el Project Manager de la compañía y los miembros senior del equipo de desarrollo de software se sientan para discutir el proyecto con el cliente.</p>
               <p>Es durante esta reunión que el cliente simplemente le proporciona a la empresa toda la información relevante sobre lo que quiere y lo que necesita hacer, y debe hacerlo de manera clara y profesional.</p>
               <p>Dos, recurrir a entrevistas cortas con el cliente que ayuden a aclarar exactamente qué tipo de solución de software necesitan y cuáles son sus requisitos específicos para este proyecto.</p>
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
                   <img src="../img/requisito.png" alt="ejemplo de requisito" height="300px" width="450px">
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