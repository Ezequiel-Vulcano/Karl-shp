<?php 

?>

<div class="row">
    <form class="col-10 newsletter" method="GET" action="index.php?home=inicio">

        <div class="row">
            <div class="col-xl-4 p-0">
                <img src="./imagenes/form/form-img.jpg" alt="Foto de una modelo posando" class="img-fluid m-0">
            </div>

            <div class="col-xl-8 p-xl-4">
                <div class="row g-2 d-flex justify-content-center">
                    <h2 class="text-center col-12">Suscribite a nuestro Newsletter</h2>
                    <p class="text-center mt-1 col-12">
                        ¡Enterate antes que nadie las ultimas promociones!
                    </p>
                    <div class="col-10 col-lg-6 col-xl-12">
                        <div class="form-floating contentn-form">
                            <input type="text" class="form-control form-contacto" id="nombre" name="nombre" required> 
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="col-10 col-lg-6 col-xl-12">
                        <div class="form-floating contentn-form">
                            <input type="text" class="form-control form-contacto" id="apellido" name="apellido" required> 
                            <label for="apellido">Apellido</label>
                        </div>
                    </div>
                    <div class="col-10 col-lg-6 col-xl-12">
                        <div class="form-floating contentn-form">
                            <input type="date" class="form-control form-contacto" id="date" name="date" required> 
                            <label for="date">Fecha de nacimiento</label>
                        </div>
                    </div>
                    <div class="col-10 col-lg-6 col-xl-12">
                        <div class="form-floating contentn-form">
                            <input type="text" class="form-control form-contacto" id="correo" name="correo" required> 
                            <label for="correo">Correo electronico</label>
                        </div>
                    </div>

                    <button class="btn enviar col-xl-3 justify-content-center mt-xl-5" type="submit" name="home" value="datos">Enviar</button>
                </div>
            </div>
        </div>
    </form>
</div>