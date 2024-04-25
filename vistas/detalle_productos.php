<?php
$datosGet = $_GET;

require_once("includes/funciones.php");
$catalogoJSON = file_get_contents("./js/catalogo.json");
$catalogo = json_decode( $catalogoJSON, true );

$producto = buscar_producto($datosGet["id"], $catalogo);


?>

<section>

    <?php
    if ($producto !== false) {
    ?>
        <div>
            <img src="<?php echo $producto["img"]?>" alt="foto de <?php echo $producto["nombre"]?>">
        </div>
        <div>
            <h2><?php echo $producto["nombre"]?></h2>
            <p><?php echo $producto["descripcion"]?></p>
        </div>

    <?php
    } else {
    ?>

        <?php echo "producto nooooooooooo encontrado";  ?>

    <?php
    }
    ?>
</section>