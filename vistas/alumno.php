<?php
    $datosAlumno = [
        "nombreCompleto" => "Ezequiel Matias Vulcano",
        "edad" => 23,
        "correo" => "ezequiel.vulcano@gmail.com",
        "linkedin" => "Ezequiel-Matias-Vulcano",
        "portada" => "./imagenes/alumno/portada.jpeg",
        "alt" => "Foto del alumno"
    ]
?>

<div class="row justify-content-center align-items-center contenedor_alumno">
    <div class="col-xl-4 m-0 p-0">
        <img src="<?php echo $datosAlumno["portada"]; ?>" alt="<?php echo $datosAlumno["alt"]; ?>" class="img-fluid"> 
    </div>
    <div class="col-xl-8 m-0">
        <p class="referencia">Nombre: <span><?php echo $datosAlumno["nombreCompleto"]; ?></span></p>
        <p class="referencia">Edad: <span><?php echo $datosAlumno["edad"]; ?></span></p>
        <p class="referencia">Correo: <span><?php echo $datosAlumno["correo"]; ?></span></p>
        <p class="referencia">Linkedin: <span><?php echo $datosAlumno["linkedin"]; ?></span></p>
    </div>
</div>