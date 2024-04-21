<?php 

$ropa_hombre = [
    [
        "nombre" => "Buso Jersey acolchado",
        "tipo" => "buso",
        "genero" => "hombre",
        "colores" => ["rojo", "verde", "amarillo", "azul"],
        "precio" => 15000,
        "img" => "/imagenes/catalogo/hombre/1.png",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend, nisi ac tempor interdum, lectus felis malesuada nisi, eu condimentum nulla lectus sed lorem. Duis quis libero vitae odio ultricies commodo. Vivamus at felis in odio lacinia tempor."
    ],
    [
        "nombre" => "Camisa de Bolos",
        "tipo" => "camisa",
        "genero" => "hombre",
        "colores" => ["rojo", "verde", "amarillo", "negro"],
        "precio" => 18000,
        "img" => "/imagenes/catalogo/hombre/2.png",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend, nisi ac tempor interdum, lectus felis malesuada nisi, eu condimentum nulla lectus sed lorem. Duis quis libero vitae odio ultricies commodo. Vivamus at felis in odio lacinia tempor."
    ],
];

$ropa_mujer = [
    [
        "nombre" => "Vestido con flores",
        "tipo" => "vestido",
        "genero" => "mujer",
        "colores" => ["rosa", "negro", "amarillo", "gris"],
        "precio" => 1000,
        "img" => "/imagenes/catalogo/mujer/1.png",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend, nisi ac tempor interdum, lectus felis malesuada nisi, eu condimentum nulla lectus sed lorem. Duis quis libero vitae odio ultricies commodo. Vivamus at felis in odio lacinia tempor."
    ],
    [
        "nombre" => "zapatos de cuero",
        "tipo" => "zapatos",
        "genero" => "mujer",
        "colores" => ["negro"],
        "precio" => 18000,
        "img" => "/imagenes/catalogo/mujer/2.png",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend, nisi ac tempor interdum, lectus felis malesuada nisi, eu condimentum nulla lectus sed lorem. Duis quis libero vitae odio ultricies commodo. Vivamus at felis in odio lacinia tempor."
    ],
];

$ropa_niños = [
    [
        "nombre" => "remera power ranger",
        "tipo" => "remera",
        "genero" => "niños",
        "colores" => [],
        "precio" => 1000,
        "img" => "/imagenes/catalogo/niños/1.png",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend, nisi ac tempor interdum, lectus felis malesuada nisi, eu condimentum nulla lectus sed lorem. Duis quis libero vitae odio ultricies commodo. Vivamus at felis in odio lacinia tempor."
    ],
    [
        "nombre" => "remera de floricienta",
        "tipo" => "remera",
        "genero" => "niños",
        "colores" => [],
        "precio" => 18000,
        "img" => "/imagenes/catalogo/niños/2.png",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend, nisi ac tempor interdum, lectus felis malesuada nisi, eu condimentum nulla lectus sed lorem. Duis quis libero vitae odio ultricies commodo. Vivamus at felis in odio lacinia tempor."
    ],
];

$productos = array_merge($ropa_hombre, $ropa_mujer, $ropa_niños);

?>