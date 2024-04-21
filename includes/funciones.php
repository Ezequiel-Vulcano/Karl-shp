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
        <div class="card col-xl-6">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $valor["nombre"]?></h5>
                <p class="card-text">descripcion</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php foreach($valor["colores"] as $color){echo $color;}?></li>
                <li class="list-group-item">tipo</li>
                <li class="list-group-item">precio</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Comprar</a>
            </div>
        </div>
    <?php } 
}


?>