<?php
class Catalogo
{

    private $porcentaje;
    private $descuento;
    private $id;
    private $nombre;
    private $tipo;
    private $genero;
    private $colores;
    private $precio;
    private $img;
    private $descripcion;
    private $estrellas;
    private $fecha;



    // ******************************      METODOS      ******************************//



    /**
     * Funcion que se encarga de devolver el catalogo completo del JSON.
     * @return array devuelve un array con todos los articulos de mi catalogo.
     */
    public function catalogo_completo(): array
    {
        $catalogo = [];
        $catalogoJSON = file_get_contents("./js/catalogo.json");
        $JSON = json_decode($catalogoJSON);

        foreach ($JSON as $producto) {

            $articulo = new self();

            $articulo->porcentaje = $producto->porcentaje;
            $articulo->descuento = $producto->descuento;
            $articulo->id = $producto->id;
            $articulo->nombre = $producto->nombre;
            $articulo->tipo = $producto->tipo;
            $articulo->genero = $producto->genero;
            $articulo->colores = $producto->colores;
            $articulo->precio = $producto->precio;
            $articulo->img = $producto->img;
            $articulo->descripcion = $producto->descripcion;
            $articulo->estrellas = $producto->estrellas;

            $catalogo[] = $articulo;
        }

        return $catalogo;
    }

    /**
     * Funcion que se encarga de generar dinamicamente las tarjetas de productos.
     * @param array es el array que contiene todos los filtrados o catalogo completo.
     */
    public function mostrar_tarjetas(array $productos): void
    {
        foreach ($productos as $valor) { ?>
            <?php if ($valor->getDescuento()) { ?>
                <div class="col-md-5 col-9 col-xl-4 p-xl-4 tarjeta_catalogo mb-5 mt-0">
                    <div>
                        <a href="./index.php?home=detalle_productos&id=<?php echo $valor->getId() ?>&genero=<?php echo $valor->getGenero() ?>" class="text-decoration-none">
                            <div>
                                <img src="<?php echo $valor->getImg() ?>" class="img-fluid" alt="foto de <?php echo $valor->getNombre() ?>">
                            </div>
                        </a>
                        <ul class="w-100">
                            <li>
                                <h3 class="text-start mt-3"><?php echo $valor->getNombre() ?></h3>
                            </li>
                            <li class="text-start descuento"><?php echo '$ ' . number_format($valor->getPrecio(), 0, ',', '.') ?></li>
                            <li class="text-start descuento-aplicado"><?php echo '$ ' . number_format(($valor->getPrecio() - (($valor->getPrecio()) * $valor->getPorcentaje())), 0, ',', '.') ?></li>
                        </ul>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="col-md-5 col-9 col-xl-4 p-xl-4 tarjeta_catalogo mt-0">
                    <div>
                        <a href="./index.php?home=detalle_productos&id=<?php echo $valor->getId() ?>&genero=<?php echo $valor->getGenero() ?>" class="text-decoration-none">
                            <div>
                                <img src="<?php echo $valor->getImg() ?>" class="img-fluid" alt="foto de <?php echo $valor->getNombre() ?>">
                            </div>
                        </a>
                        <ul class="w-100">
                            <li>
                                <h3 class="text-start mt-3"><?php echo $valor->getNombre() ?></h3>
                            </li>
                            <li class="text-start descuento-negativo"><?php echo '$ ' . number_format($valor->getPrecio(), 0, ',', '.'); ?></li>
                        </ul>
                    </div>
                </div>
            <?php
            }
            ?>

        <?php }
    }

    /**
     * Funcion que se encarga de filtrar el catalago por genero.
     * @return array devuelve un array con el genero seleccionado.
     * @param string es el nombre del genero a filtrar (hombre, mujer, niños).
     * @param array es el array que contiene todos los productos de mi marca.
     */
    function filtrar_por_genero(string $genero, array $productos): array
    {
        $lista_filtrada = [];

        foreach ($productos as $valor) {
            if ($valor->getGenero() == $genero) {
                $lista_filtrada[] = $valor;
            }
        };

        return $lista_filtrada;
    }

    /**
     * Funcion que se encarga de traerme el producto seleccionado por el usuario a traves del ID.
     * @param array es el array que contiene todo mi catalogo completo.
     * @param string es el ID que me sirve para rastrear el producto dentro de mi catalogo.
     */
    function buscar_producto(string $id, array $catalogo)
    {
        foreach ($catalogo as $valor) {
            if ($valor->getId() == $id) {
                return  $valor;
            };
        };

        return false;
    }

    /**
     * Funcion que se encarga de mostrar productos relacionados como referencia para el usuario.
     * @param array es el array que contiene todo mi catalogo completo.
     * @param string es el genero por el que voy a filtrar.
     * @return array devuelve un array con todos los productos del genero seleccionado.
     */
    function productos_relacionados(array $catalogoCompleto, string $generoFiltrar): array
    {
        $productos_mostrar = [];

        foreach ($catalogoCompleto as $producto_agregado) {
            if ($producto_agregado->getGenero() == $generoFiltrar) {
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
    function seleccionar_tres_productos(array $productos_mostrar): array
    {
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

    /**
     * Función que se encarga de mostrar el detalle de los productos individualmente.
     * @param object es el objto del producto en particular que voy a utilizar.
     */
    function generar_detalle_producto(object $producto)
    { ?>
        <div class="col-xl-12 col-10">
            <div class="row">
                <div class="col-xl-5 me-xl-2">
                    <img class="img-fluid" src="<?php echo $producto->getImg() ?>" alt="foto de <?php echo $producto->getNombre() ?>">
                </div>
                <div class="col-xl-4 detalle_producto_info ms-xl-0 mt-5">
                    <h2><?php echo $producto->getNombre() ?></h2>
                    <div>
                        <!-- FUNCION QUE SE ENCARGA DE APLICAR EL DESCUENTO SI ES QUE EL PRODUCTO TIENE LA VARIABLE DESCUENTO EN TRUE -->
                        <?php if ($producto->getDescuento()) { ?>

                            <h3 class="text-start descuento-aplicado"><?php echo '$ ' . number_format(($producto->getPrecio() - (($producto->getPrecio()) * $producto->getPorcentaje())), 0, ',', '.') ?>
                            </h3>
                        <?php
                        } else {
                        ?>
                            <h3 class="text-start descuento-negativo"><?php echo '$ ' . number_format($producto->getPrecio(), 0, ',', '.'); ?></h3>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="stock">
                        Disponible: <span>En stock</span>
                    </div>
                    <div class="mb-5 stock">
                        Fecha: <span><?php echo $producto->getFecha() ?></span>
                    </div>

                    <!-- ESTRUCTURA QUE SE ENCARGA DE GENERAR DINAMICAMENTE LAS ESTRELLAS DE UN PRODUCTO -->

                    <div>
                        <!-- Genera las estrellas rellenas -->
                        <?php
                        $estrellas = $producto->getEstrellas();
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


                    <div class="mt-xl-5 mt-5">
                        <span class="text-uppercase">Talles:</span>
                        <ul class="d-flex mt-xl-3 p-xl-0">
                            <li class="talles">32</li>
                            <li class="talles">34</li>
                            <li class="talles">36</li>
                            <li class="talles">38</li>
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
                                        <?php echo $producto->getDescripcion() ?>
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

                    <!--
                    <div class="mt-4 agregarCarrito">
                        <span>Agregar al Carrito</span>
                    </div> -->
                </div>
            </div>
        </div>
<?php
    }



    // ******************************      GETTERS & SETTERS      ******************************//



    /**
     * Get the value of porcentaje
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set the value of porcentaje
     *
     * @return  self
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get the value of descuento
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set the value of descuento
     *
     * @return  self
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of colores
     */
    public function getColores()
    {
        return $this->colores;
    }

    /**
     * Set the value of colores
     *
     * @return  self
     */
    public function setColores($colores)
    {
        $this->colores = $colores;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of estrellas
     */
    public function getEstrellas()
    {
        return $this->estrellas;
    }

    /**
     * Set the value of estrellas
     *
     * @return  self
     */
    public function setEstrellas($estrellas)
    {
        $this->estrellas = $estrellas;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
}


?>