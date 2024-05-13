<?php
require_once("includes/funciones.php");

$valoresGet = $_GET;
//echo_pre($valoresGet);

$acceso_permitido = [
    "404" => [
        "ruta" => "404.php",
        "titulo" => "Error 404: pagina no encontrada"
    ],
    "inicio" => [
        "ruta" => "inicio.php",
        "titulo" => "Inicio",
    ],
    "productos" => [
        "ruta" => "productos.php",
        "titulo" => "Productos",
    ],
    "detalle_productos" => [
        "ruta" => "detalle_producto.php",
        "titulo" => "Detalle de Producto",
    ],
    "form" => [
        "ruta" => "form.php",
        "titulo" => "Formulario",
    ],
    "datos" => [
        "ruta" => "datos.php",
        "titulo" => "Registro Correcto",
    ],
    "alumno" => [
        "ruta" => "alumno.php",
        "titulo" => "Alumno",
    ],
];

if (isset($valoresGet["home"]) && array_key_exists($valoresGet["home"], $acceso_permitido)) {
    $vista = $valoresGet["home"];
} else {
    $vista = "inicio.php";
};

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d906409094.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--ANIMACION AOS-->

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/vistas/inicio.css">
    <link rel="stylesheet" href="./css/vistas/productos.css">
    <link rel="stylesheet" href="./css/vistas/form.css">
    <link rel="stylesheet" href="./css/vistas/datos.css">
    <link rel="stylesheet" href="./css/vistas/error.css">
    <link rel="stylesheet" href="./css/vistas/alumno.css">
    <link rel="stylesheet" href="./css/vistas/detalle_productos.css">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>
        <?php
        if ($vista == "inicio.php") {
            echo "Inicio";
        } else {
            echo $acceso_permitido[$vista]["titulo"];
        }
        ?>
    </title>
</head>

<body>

    <header class="container">
        <div class="row">
            <h1 class="d-none">Karl-Moda</h1>
            <div class="col-4 mt-5 d-flex justify-content-between col-lg-6">
                <a href="index.php?home=inicio">
                    <img src="./imagenes/header/logo.png" alt="logo de la marca" class="img-fluid">
                </a>
            </div>
            <div class="col-4 mt-5 col-lg-6">
                <div class="col-4 d-flex ">


                    <i class="fa-solid fa-bag-shopping me-3 simbolos p-2"></i>
                    <span class="navbar-toggler m-0 d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fa-solid fa-bars p-2 navbar-toggler-icon simbolos"></i>
                        </span>
                    </span>



                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header m-0 ">
                            <span class="offcanvas-title m-0 fs-3" id="offcanvasNavbarLabel">MENU</span>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body m-0">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 m-0">
                                <li class="m-0">
                                    <?php
                                    resaltado($valoresGet['home'], "inicio", "Inicio")
                                    ?>
                                </li>
                                <li class="m-0">
                                    <?php
                                    resaltado($valoresGet['home'], "alumno", "Alumno")
                                    ?>
                                </li>
                                <li class="m-0">
                                    <?php
                                    resaltado($valoresGet['home'], "form", "Formulario")
                                    ?>
                                </li>
                                <li class="m-0">
                                    <div>
                                        <span data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <?php
                                            resaltado_boton2($valoresGet['home'], "productos", "PRODUCTOS")
                                            ?>
                                        </span>

                                        <ul class="collapse" id="collapseExample">

                                            <li><a class="dropdown-item" href="index.php?home=productos&genero=hombre">Hombres</a></li>
                                            <li><a class="dropdown-item" href="index.php?home=productos&genero=mujer">Mujeres</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="index.php?home=productos">Catalogo completo</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex col-5 mt-5 col-md-5 col-lg-2">
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
                        <?php
                        resaltado($valoresGet['home'], "inicio", "Inicio")
                        ?>
                    </li>
                    <li>
                        <div class="btn-group">
                            <?php
                            resaltado_boton($valoresGet['home'], "productos", "PRODUCTOS")
                            ?>
                            <ul class="dropdown-menu">
                                <!-- SE AGREGA LA SECCION NIÑOS PROXIMAMENTE -->
                                <!--<li><a class="dropdown-item" href="index.php?home=productos&genero=niños">Niños</a></li> -->
                                <li><a class="dropdown-item" href="index.php?home=productos&genero=hombre">Hombres</a></li>
                                <li><a class="dropdown-item" href="index.php?home=productos&genero=mujer">Mujeres</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index.php?home=productos">Catalogo completo</a></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <?php
                        resaltado($valoresGet['home'], "alumno", "Alumno")
                        ?>
                    </li>
                    <li>
                        <?php
                        resaltado($valoresGet['home'], "form", "Formulario")
                        ?>
                    </li>
                </ul>
            </div>
            <div class="col-9 col-md-7 mt-5 contacto col-lg-3 d-lg-flex d-none">
                <span class="m-auto ">
                    <i class="fa-solid fa-headphones p-3 quitar-fondo"></i> +54 911 2585-7648
                </span>
            </div>
        </div>
        <section class="section_1 row mt-4 mb-5">
            <div class="contenedor-1 contenedor col-12 col-md-4 text-center">
                <span class="d-block">Envío y Devoluciones Gratuitas</span>
                <span>Compra ahora</span>
            </div>
            <div class="contenedor-2 contenedor col-12 col-md-4 text-center">
                <span class="d-block">20% en todos los vestidos</span>
                <span>Aprovecha el Codigo: Colorlib</span>
            </div>
            <div class="contenedor-3 contenedor col-12 col-md-4 text-center">
                <span class="d-block">20% para estudiantes</span>
                <span>Aprovecha el Codigo: StudentOff</span>
            </div>
        </section>
    </header>

    <main class="container-fluid index">
        <?php
        if (array_key_exists($vista, $acceso_permitido)) {
            require_once("vistas/$vista.php");
        } else {
            require_once("vistas/404.php");
        }
        ?>
    </main>

    <footer class="mt-5 pt-4 container-fluid">
        <div class="row">
            <div class="col-12 col-md-5 col-lg-3 d-flex flex-column align-items-center align-items-sm-start ps-sm-5 mt-lg-5 mt-md-5">
                <img src="./imagenes/header/logo.png" alt="logo de la marca">
                <p class="text-center text-md-start mt-2 mb-4">
                    © 2024 Karl Fashion. Todos los derechos reservados.
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
                        <a href="#">Diseñadores</a>
                    </li>
                    <li>
                        <a href="#">Soporte Tecnico</a>
                    </li>
                    <li>
                        <a href="#">Sumate al Equipo</a>
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

    <?php 
        if($valoresGet["home"] == "inicio"){
    ?>
        <script src="./js/index.js"></script>
    <?php 
        }
    ?>
    <!--ANIMACION AOS-->
    <!--
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
        -->
</body>

</html>