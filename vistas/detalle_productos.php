<?php
$datosGet = $_GET;

require_once("includes/funciones.php");
$catalogoJSON = file_get_contents("./js/catalogo.json");
$catalogo = json_decode($catalogoJSON, true);

$producto = buscar_producto($datosGet["id"], $catalogo);
$producto_relacionado = productos_relacionados($catalogo, $datosGet["genero"]);
$producto_relacionado_3 = seleccionar_tres_productos($producto_relacionado);


?>

<section class="detalle_producto row">

    <?php
    if ($producto !== false) {
    ?>
        <div class="col-xl-5 me-xl-2">
            <img class="img-fluid" src="<?php echo $producto["img"] ?>" alt="foto de <?php echo $producto["nombre"] ?>">
        </div>
        <div class="col-xl-4 detalle_producto_info ms-xl-0">
            <h2><?php echo $producto["nombre"] ?></h2>
            <div>
                <!-- FUNCION QUE SE ENCARGA DE APLICAR EL DESCUENTO SI ES QUE EL PRODUCTO TIENE LA VARIABLE DESCUENTO EN TRUE -->
                <?php if ($producto["descuento"]) { ?>

                    <h3 class="w-100 text-start descuento-aplicado"><?php echo '$ ' . number_format(($producto["precio"] - (($producto["precio"]) * $producto["porcentaje"])), 0, ',', '.') ?>
                    </h3>
                <?php
                } else {
                ?>
                    <h3 class="w-100 text-start descuento-negativo"><?php echo '$ ' . number_format($producto["precio"], 0, ',', '.'); ?></h3>
                <?php
                }
                ?>
            </div>
            <div class="mb-xl-5 stock">
                Disponible: <span>En stock</span>
            </div>

            <!-- ESTRUCTURA QUE SE ENCARGA DE GENERAR DINAMICAMENTE LAS ESTRELLAS DE UN PRODUCTO -->

            <div>
                <!-- Genera las estrellas rellenas -->
                <?php 
                    $estrellas = $producto["estrellas"];
                    for ($i = 1; $i <= $estrellas; $i++) {
                ?>
                    <i class="fa-solid fa-star" style="color: #ff9800;"></i>
                <?php
                    }
                ?>

                <!-- Genera las estrellas vacias -->
                <?php 
                    for ($i = $estrellas; $i <= 4; $i++) {
                ?>
                    <i class="fa-regular fa-star" style="color: #ff9800;"></i>
                <?php 
                    }
                ?>
            </div>


            <div class="mt-xl-5">
                <span class="text-uppercase">Talles:</span>
                <ul class="d-flex mt-xl-3 p-xl-0">
                    <li class="talles">33</li>
                    <li class="talles">33</li>
                    <li class="talles">33</li>
                    <li class="talles">33</li>
                </ul>
            </div>
            <div class="accordion mt-xl-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header p-xl-3 mb-0 accordion-titulo">
                        <buttonn class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Descripcion
                        </buttonn>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="descripicon ps-xl-3">
                                <?php echo $producto["descripcion"] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header p-xl-3 mb-0 accordion-titulo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Formas de envio
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>
                                <p class="descripicon ps-xl-3">
                                    Nos enorgullece ofrecerte un servicio de envío rápido y confiable para que recibas tus productos de forma segura y oportuna. Trabajamos con los mejores servicios de mensajería para garantizar que tu pedido llegue a tus manos en perfectas condiciones. Además, ofrecemos opciones de envío express para aquellos que necesitan recibir sus compras con mayor rapidez. ¡Tu satisfacción es nuestra prioridad, y nos esforzamos por hacer que tu experiencia de compra sea lo más conveniente posible!
                                </p>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 mt-xl-5 catalogo_productos">
            <div class="contenedor_productos">
                <h2>Productos Relacionados</h2>
                <div class="d-flex">
                    <!-- AGREGO LA FUNCION QUE SE ENCARGA DE GENERARME 3 PRODUCTOS ALEATORIOS PARA PODER MOSTRARLE AL USUARIO-->
                    <?php mostrar_tarjetas($producto_relacionado_3)?>
                </div>
            </div>
        </div>
        
    <?php
    } else {
    ?>

        <?php echo "producto nooooooooooo encontrado";  ?>

    <?php
    }
    ?>
</section>