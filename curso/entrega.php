
<?php include "../layout/header.php" ?>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <div class="container" style="padding-top:75px;">
        
        <div class="row">
            <div class="col-12 text-center ">
            <h1 style="color: #fff; " class="text-center h1-init animate__animated animate__repeat-3 animate__rubberBand"><b> Entrega</b></h1>
                
                <figure>
                   <img src="../img/entrega.jpg" alt="ejemplo de requisito" width="660" height="415">
               </figure>
            </div>       
        </div>
        <div class="row" style="color: #fff; padding-top:25px;">
            
            <div class="col-6 text-center pb-4">
                <button type="button" class="btn-lg btn-danger animate__animated animate__rotateInUpRight" data-toggle="modal" data-target="#modalsignificado">¿Qué es la entrega? &nbsp;<i class="fas fa-laptop-code"></i></button>
				
			</div>
            <div class="col-6 text-center pb-4">
                <button type="button" class="btn-lg btn-danger animate__animated animate__rotateInDownLeft" onclick="location.href='../index.php';">Finalizar curso&nbsp;<i class="fas fa-sign-out-alt"></i></button>
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
                <p>La forma en que la empresa decide implementar y desplegar la solución de software dependerá completamente del tamaño y la complejidad del producto final.</p>
                <p>Sin embargo, las compañías tienden a usar el método de cascada de soluciones de software más grandes o el método Agile para proyectos de desarrollo de software que son mucho menos exigentes y más fáciles de implementar.</p> 
                <p>Y así es como las empresas de servicios de outsourcing de TI manejan y administran todo lo relacionado con el desarrollo de software. De nuevo, esta es una metodología estándar y las empresas pueden (y lo harán) adaptar este método a lo que necesitan específicamente.</p>

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