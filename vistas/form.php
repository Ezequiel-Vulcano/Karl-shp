<?php 

?>

<div class="row">
    <form class="col-10 newsletter" method="GET" action="index.php?home=inicio">

        <div class="row">
            <div class="col-12 col-xl-5 p-0 d-none d-lg-block col-lg-6">
                <img src="./imagenes/form/form-img.jpg" alt="Foto de una modelo posando" class="img-fluid m-0">
            </div>

            <div class="col-12 col-xl-7 p-xl-4 col-lg-6 d-flex align-items-center mb-0">
                <div class="row g-2 d-flex justify-content-center m-0">
                    <h2 class="text-center col-12 mt-4">Suscribite a nuestro Newsletter</h2>
                    <p class="text-center mt-1 col-12">
                        ¡Enterate antes que nadie las ultimas promociones!
                    </p>
                    <div class="col-12 col-lg-12 col-xl-12 col-md-10">
                        <div class="form-floating contentn-form w-100">
                            <input type="text" class="form-control form-contacto" id="nombre" name="nombre" required> 
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-12 col-md-10">
                        <div class="form-floating contentn-form w-100">
                            <input type="text" class="form-control form-contacto" id="apellido" name="apellido" required> 
                            <label for="apellido">Apellido</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-12 col-md-10">
                        <div class="form-floating contentn-form w-100">
                            <input type="date" class="form-control form-contacto" id="date" name="date" required> 
                            <label for="date">Fecha de nacimiento</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-12 col-md-10">
                        <div class="form-floating contentn-form w-100">
                            <input type="text" class="form-control form-contacto" id="correo" name="correo" required> 
                            <label for="correo">Correo electronico</label>
                        </div>
                    </div>

                    <button class="btn enviar col-xl-3 justify-content-center mt-xl-5 mt-5 col-md-5 mb-3" type="submit" name="home" value="datos">Enviar</button>
                </div>
            </div>
        </div>
    </form>
</div>