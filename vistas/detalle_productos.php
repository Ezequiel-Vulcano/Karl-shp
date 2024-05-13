<?php
$datosGet = $_GET;

require_once("includes/funciones.php");
require_once("clases/Catalogo.php"); // Traigo mi archivo de clases con el CATALOGO DE PRODUCTOS,

$objetoCatalogo = new Catalogo(); // Creo la instancia para trabajar con mi objeto.
$catalogoCompleto = $objetoCatalogo->catalogo_completo(); // Dentro de mi instancia utilizo el metodo que me devuelve el catalogo completo.

$producto = $objetoCatalogo->buscar_producto($datosGet["id"], $catalogoCompleto); 
$producto_relacionado =  $objetoCatalogo->productos_relacionados($catalogoCompleto, $datosGet["genero"]);
$producto_relacionado_3 = $objetoCatalogo->seleccionar_tres_productos($producto_relacionado);

?>

<section class="detalle_producto row">

    <?php
    if ($producto !== false) {

    $objetoCatalogo->generar_detalle_producto($producto);
    
    ?>

    <div class="col-xl-12 mt-xl-5 catalogo_productos mt-5 p-0">
        <div class="contenedor_productos">
            <h2 class="text-center mb-3">Productos Relacionados</h2>
            <div class="d-flex flex-wrap">
                <!-- AGREGO LA FUNCION QUE SE ENCARGA DE GENERARME 3 PRODUCTOS ALEATORIOS PARA PODER MOSTRARLE AL USUARIO-->
                <?php $objetoCatalogo->mostrar_tarjetas($producto_relacionado_3)?>
            </div>
        </div>
    </div>
        
    <?php
    } else {
    ?>

        <?php require_once("vistas/404.php"); ?>

    <?php
    }
    ?>
</section>