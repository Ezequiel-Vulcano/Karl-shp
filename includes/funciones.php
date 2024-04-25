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
        <div class="col-xl-4 p-xl-4 tarjeta_catalogo mb-4">
            <div>
                <div>
                    <a href="./index.php?home=detalle_productos&id=<?php echo $valor["id"]?>" class="text-decoration-none">
                        <img src="<?php echo $valor["img"]?>" class="img-fluid" alt="foto de <?php echo $valor["nombre"]?>">
                    </a>
                </div>
                
                <ul class="w-100">
                    <li><h3 class="text-start mt-3"><?php echo $valor["nombre"]?></h3></li>
                    
                    <li>
                        <!-- FUNCION QUE SE ENCARGA DE APLICAR EL DESCUENTO SI ES QUE EL PRODUCTO TIENE LA VARIABLE DESCUENTO EN TRUE -->
                        <?php if($valor["descuento"]) { ?>
                            
                            <li class="w-100 text-start descuento"><?php echo '$ ' . number_format($valor["precio"], 0, ',', '.'); ?></li>
                            <li class="w-100 text-start descuento-aplicado"><?php echo '$ ' . number_format(($valor["precio"] - (($valor["precio"])*$valor["porcentaje"])), 0, ',', '.'). $valor["porcentaje"]."OFF"?></li>
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
