<?php 
    $valoresGet = $_GET;    
    /* Llamo a los valores de get donde almaceno a traves de los enlaces el genero para mostrar la ropa segun
    - Niños
    - Mujeres
    _ Hombres
    */
?>

<section class="row catalogo_productos">
    <div class="col-xl-3">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam beatae dolorum hic nam ducimus eligendi ut consequuntur officia officiis impedit expedita, sapiente laudantium error magni sint recusandae aliquam! Laborum, rerum!
        </p>
    </div>
    <div class="d-flex col-xl-9">
        <div class="row d-flex">
            <?php 
                require_once("includes/catalogo.php");
                require_once("includes/funciones.php");

                if(isset($valoresGet["genero"])){
                    /* Filtro todos los productos que tengo por genero */
                    $productos_filtrados = filtrar_por_genero($valoresGet["genero"], $productos);

                    /* Muestro las tarjetas filtradas */
                    mostrar_tarjetas($productos_filtrados);
                } else {
                    /*El usuario Ingresa al catalogo completo de productos al ingresar en esta parte del codigo*/
                    mostrar_tarjetas($productos);
                }  
            ?>
        </div>
    </div> 
</section>
 

