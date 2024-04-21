<h2>Hola soy otra seccion</h2>
<h1>Que tal marta</h1>
<p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis veniam magni minima, quam in sint ut ipsam corrupti molestiae assumenda explicabo tempora mollitia laborum cum recusandae rem. Similique, dolores corporis!
</p>

<div class="d-flex">
    <?php 
        require_once("includes/catalogo.php");

        foreach($productos as $valor){?>
            <div class="card" style="width: 18rem;">
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
    ?>

</div>  

