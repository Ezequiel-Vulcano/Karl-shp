<?php 


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d906409094.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!--ANIMACION AOS-->

    <link rel="stylesheet" href="./sass/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>TOMA 2</title>
</head>
<body>

    <header class="container">
        <div class="row">
            <h1 class="d-none">Karl-Moda</h1>
            <div class="col-4 mt-5 d-flex justify-content-between col-lg-6">
                <div class="">
                    <img src="./imagenes/header/logo.png" alt="logo de la marca" class="img-fluid">
                </div>
            </div>
            <div class="col-4 mt-5 col-lg-6">
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <i class="fa-solid fa-bag-shopping me-3"></i>                
                    <i class="fa-solid fa-bars p-2"></i>
                </div>
            </div>
            <div class="mt-5 col-md-5 col-lg-2">
                <i class="fa-brands fa-facebook me-3"></i>
                <i class="fa-brands fa-linkedin-in me-3"></i>
                <i class="fa-brands fa-twitter me-3"></i>
                <i class="fa-brands fa-pinterest"></i>
            </div>
            <div class="col-9 col-md-7 mt-5 contacto text-center col-lg-3 d-lg-none">
                <span class="m-auto">
                    <i class="fa-solid fa-headphones p-3"></i> +54 911 2585-7648
                </span>
            </div>
            <div class="flecha d-flex justify-content-center">
                <a href="#" class="d-flex align-items-center">
                    <i class="fa-solid fa-chevron-up"></i>
                </a>
            </div>
            <div class="col-md-9 mt-md-5 d-md-block d-none col-lg-7 d-flex">
                <ul class="d-flex p-0 ">
                    <li>
                        <a href="<?php require_once('vistas/seccion2.php') ?>">
                            Inicio
                        </a>
                    </li>
                    <li>
                        Productos
                    </li>
                    <li>
                        Contacto
                    </li>
                    <li>
                        page 1
                    </li>
                    <li>
                        page 1
                    </li>
                </ul>
            </div>
            <div class="col-9 col-md-7 mt-5 contacto col-lg-3 d-lg-flex d-none">
                <span class="m-auto ">
                    <i class="fa-solid fa-headphones p-3 quitar-fondo"></i> +54 911 2585-7648
                </span>
            </div>
        </div>
        
    </header>

    <main class="container-fluid index">
        <?php  require_once('vistas/seccion2.php');
 ?>
    </main>

    <footer class="mt-5 pt-4 container-fluid">
        <div class="row">
            <div class="col-12 col-md-5 col-lg-3 d-flex flex-column align-items-center align-items-sm-start ps-sm-5 mt-lg-5 mt-md-5">
                <img src="./imagenes/header/logo.png" alt="logo de la marca" >
                <p class="text-center text-md-start mt-2 mb-4">
                    © 2024 Progresive Web Apps. Todos los derechos reservados.
                </p>
            </div>
            <div class="col-12 col-md-3 col-sm-6 col-lg-2 footer-lista-1 mt-5"> <!-- LISTA DE ENLACES 1 -->
                <ul>
                    <li>
                        <a href="#">Acerca de Nosotros</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Preguntas Frecuentes</a>
                    </li>
                    <li>
                        <a href="#">Devoluciones</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                </ul>
            </div> 
            <div class="col-12 col-md-4 col-sm-6 col-lg-2 mt-sm-5 footer-lista-2"> <!-- LISTA DE ENLACES 2 -->
                <ul>
                    <li>
                        <a href="#">Mi cuenta</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Preguntas Frecuentes</a>
                    </li>
                    <li>
                        <a href="#">Devoluciones</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-4 footer-form mt-5 mb-5 d-flex flex-column align-items-center "> <!-- NEWSLETTER -->
                <span>Suscribite a nuestro Newsletter</span>
                <form action="#" method="GET">
                    <label for="email" class="d-none">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required placeholder="Ingrese su gmail">
                    <button type="submit w-25">Enviar</button>
                </form>
            </div>
            <div class="footer-iconos d-flex justify-content-center col-12 col-sm-6"> <!-- ICONOS -->
                <a href="#">
                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--ANIMACION AOS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="./js/index.js"></script>
</body>
</html>