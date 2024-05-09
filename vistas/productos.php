<?php
$valoresGet = $_GET;
/* Llamo a los valores de get donde almaceno a traves de los enlaces el genero para mostrar la ropa segun
    - Niños
    - Mujeres
    _ Hombres
*/
require_once("includes/funciones.php"); // Traigo mi archivo con funciones,
require_once("clases/Catalogo.php"); // Traigo mi archivo de clases con el CATALOGO DE PRODUCTOS,

$objetoCatalogo = new Catalogo(); // Creo la instancia para trabajar con mi objeto.
$catalogoCompleto = $objetoCatalogo->catalogo_completo(); // Dentro de mi instancia utilizo el metodo que me devuelve el catalogo completo.

?>

<!------------------------    CONTENIDO HTML    ------------------------>

<section class="row catalogo_productos">

    <!-- SECCION DE FILTROS POR CATEGORIA -->
    <div class="col-xl-3">
        <h2>Categorias</h2>
        <div class="filtro_categorias">
            <div>
                <!-- Filtro por sexo:
                * Hombre
                * Mujer
                * Niños
                -->
                <div>
                    <!-- HOMBRES -->
                    <div class="form-check mb-xl-3 mt-5 filtro_categorias_contenedores">

                        <input class="form-check-input" type="checkbox" value="" id="check_hombres" data-bs-target="#collapse_hombres" data-bs-toggle="collapse">
                        <label class="form-check-label" for="check_hombres" aria-controls="collapse_hombres"
                            data-bs-target="#collapse_hombres" data-bs-toggle="collapse">
                            Hombres
                        </label>

                        <div class="collapse" id="collapse_hombres">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remeras_hombres">
                                    <label class="form-check-label" for="remeras_hombres">
                                        Remeras
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="camisas_hombres">
                                    <label class="form-check-label" for="camisas_hombres">
                                        Camisas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="pantalones_hombres">
                                    <label class="form-check-label" for="pantalones_hombres">
                                        Pantalones
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="categoria_4_hombres">
                                    <label class="form-check-label" for="categoria_4_hombres">
                                        Categoria_4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="categoria_5_hombres">
                                    <label class="form-check-label" for="categoria_5_hombres">
                                        Categoria_5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MUJERES -->
                    <div class="form-check mb-xl-3 filtro_categorias_contenedores">
                        <input class="form-check-input" type="checkbox" value="" id="check_mujeres" data-bs-target="#collapse_mujeres" data-bs-toggle="collapse">
                        <label class="form-check-label" for="check_mujeres" aria-controls="collapse_mujeres"
                            data-bs-target="#collapse_mujeres" data-bs-toggle="collapse">
                            Mujeres
                        </label>

                        <div class="collapse" id="collapse_mujeres">
                            <div class=" ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remeras_mujeres">
                                    <label class="form-check-label" for="remeras_mujeres">
                                        Remeras
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="camisas_mujeres">
                                    <label class="form-check-label" for="camisas_mujeres">
                                        Camisas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="pantalones_mujeres">
                                    <label class="form-check-label" for="pantalones_mujeres">
                                        Pantalones
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="categoria_4_mujeres">
                                    <label class="form-check-label" for="categoria_4_mujeres">
                                        Categoria_4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="categoria_5_mujeres">
                                    <label class="form-check-label" for="categoria_5_mujeres">
                                        Categoria_5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- NIÑOS -->
                    <div class="form-check mb-xl-3 filtro_categorias_contenedores">
                        <input class="form-check-input" type="checkbox" value="" id="check_niños" data-bs-target="#collapse_niños" data-bs-toggle="collapse">
                        <label class="form-check-label" for="check_niños" aria-controls="collapse_niños"
                            data-bs-target="#collapse_niños" data-bs-toggle="collapse">
                            Niños
                        </label>

                        <div class="collapse" id="collapse_niños">
                            <div class=" ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remeras_niños">
                                    <label class="form-check-label" for="remeras_niños">
                                        Remeras
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="camisas_niños">
                                    <label class="form-check-label" for="camisas_niños">
                                        Camisas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="pantalones_niños">
                                    <label class="form-check-label" for="pantalones_niños">
                                        Pantalones
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="categoria_4_niños">
                                    <label class="form-check-label" for="categoria_4_niños">
                                        Categoria_4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="categoria_5_niños">
                                    <label class="form-check-label" for="categoria_5_niños">
                                        Categoria_5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- VENTANA QUE MUESTRA TODOS LOS PRODUCTOS -->
    <div class="d-flex col-xl-9 contenedor_productos">
        <div class="row d-flex">
            <?php

            if (isset($valoresGet["genero"])) {
                /* Filtro todos los productos que tengo por genero */
                $productos_filtrados = $objetoCatalogo->filtrar_por_genero($valoresGet["genero"], $catalogoCompleto);

                /* Muestro las tarjetas filtradas */
                $objetoCatalogo->mostrar_tarjetas($productos_filtrados);
            } else {
                /*El usuario Ingresa al catalogo completo de productos al ingresar en esta parte del codigo*/
                $objetoCatalogo->mostrar_tarjetas($catalogoCompleto);
            }
            ?>
        </div>
    </div>
</section>