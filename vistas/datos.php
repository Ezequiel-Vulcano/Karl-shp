<?php 
    $valoresGet = $_GET;
    /*
    echo "<pre>";
    print_r($valoresGet);
    echo "</pre>";*/
?>

<div class="fondo-datos row d-flex align-content-center">
    <div class="col-12">
        <h2 class="text-center mb-xl-5">¡Bienvenido <span><?php echo $valoresGet["nombre"] . ' ' . $valoresGet["apellido"] ?></span>!</h2>
        <p class="text-center">
            ¡Gracias por registrarte para recibir nuestras promociones!
        </p>
        <p class="text-center">
            Estamos encantados de darte la bienvenida a nuestra comunidad. Pronto comenzarás a recibir todas nuestras promociones directamente en tu correo electrónico: <span><?php echo $valoresGet["correo"]?></span>.
        </p>
        <p class="text-center"> 
            ¡Prepárate para disfrutar de descuentos exclusivos en cada temporada y mantenernos conectados!
        </p>
    </div>
    
</div>
