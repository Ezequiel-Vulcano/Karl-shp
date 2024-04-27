<?php
/**
 * Funcion que se encarga de filtrar el catalago por genero.
 * @return array devuelve un array con el genero seleccionado.
 * @param string es el nombre del genero a filtrar (hombre, mujer, niños).
 * @param array es el array que contiene todos los productos de mi marca.
*/
function filtrar_por_genero(string $genero, array $productos):array{
    $lista_filtrada = [];

    foreach($productos as $valor){
        if($valor["genero"] == $genero) {
            $lista_filtrada[] = $valor;
        }
    };

    return $lista_filtrada;
}


/**
 * Funcion que se encarga de generar dinamicamente las tarjetas de productos.
 * @param array es el array que contiene todos los filtrados o catalogo completo.
*/
function mostrar_tarjetas(array $productos):void{
    foreach($productos as $valor){?>
        <div class="col-xl-4 p-xl-4 tarjeta_catalogo mb-4 mt-0">
            <div>
                <a href="./index.php?home=detalle_productos&id=<?php echo $valor["id"]?>&genero=<?php echo $valor["genero"]?>" class="text-decoration-none">
                    <div>
                        <img src="<?php echo $valor["img"]?>" class="img-fluid" alt="foto de <?php echo $valor["nombre"]?>">
                    </div>
                </a>
                <ul class="w-100">
                    <li><h3 class="text-start mt-3"><?php echo $valor["nombre"]?></h3></li>
                    
                    <li>
                        <!-- FUNCION QUE SE ENCARGA DE APLICAR EL DESCUENTO SI ES QUE EL PRODUCTO TIENE LA VARIABLE DESCUENTO EN TRUE -->
                        <?php if($valor["descuento"]) { ?>
                            
                            <li class="w-100 text-start descuento"><?php echo '$ ' . number_format($valor["precio"], 0, ',', '.')?></li>
                            <li class="w-100 text-start descuento-aplicado"><?php echo '$ ' . number_format(($valor["precio"] - (($valor["precio"])*$valor["porcentaje"])), 0, ',', '.')?> 
                            </li>
                        <?php
                        } else {  
                        ?>
                            <li class="w-100 text-start descuento-negativo"><?php echo '$ ' . number_format($valor["precio"], 0, ',', '.'); ?></li>
                        <?php
                        }
                        ?>
                       
                    </li>
                    
                </ul>
            </div>
        </div>
    <?php } 
}

/**
 * Funcion que se encarga de traerme el producto seleccionado por el usuario a traves del ID.
 * @param array es el array que contiene todo mi catalogo completo.
 * @param string es el ID que me sirve para rastrear el producto dentro de mi catalogo.
*/
function buscar_producto(string $id, array $catalogo){
    foreach($catalogo as $valor){
        if($valor["id"] == $id) {
            return  $valor;
        };
    };

    return false;
};


/**
 * Funcion que se encarga de mostrar productos relacionados como referencia para el usuario.
 * @param array es el array que contiene todo mi catalogo completo.
 * @param string es el genero por el que voy a filtrar.
 * @return array devuelve un array con todos los productos del genero seleccionado.
*/
function productos_relacionados(array $catalogoCompleto, string $generoFiltrar ):array{
    $productos_mostrar = [];

    foreach($catalogoCompleto as $producto_agregado){
        if($producto_agregado["genero"] == $generoFiltrar){
            $productos_mostrar[] = $producto_agregado;
        }
    }

    return $productos_mostrar;
}

/**
 * Función que selecciona tres productos únicos del array $productos_mostrar.
 * @param array $productos_mostrar El array de productos a seleccionar.
 * @return array Un array con tres productos únicos seleccionados.
 */
function seleccionar_tres_productos(array $productos_mostrar): array {
    $productos_seleccionados = [];
    $indices_utilizados = [];

    while (count($productos_seleccionados) < 3) {
        $indice_aleatorio = rand(0, count($productos_mostrar) - 1);

        if (!in_array($indice_aleatorio, $indices_utilizados)) {
            $productos_seleccionados[] = $productos_mostrar[$indice_aleatorio];
            $indices_utilizados[] = $indice_aleatorio;
        }
    }

    return $productos_seleccionados;
}