<?php

/**
 * Función que se encarga de hacerme un echo / pre.
 * @param array va a ser el array que desee visualizar.
 */
function echo_pre(array $elemento){
    echo "<pre>";
    print_r($elemento);
    echo "</pre>";
}


/**
 * Función que se encarga de resaltar los enlaces en caso de que el usuario se encuentre en dicha vista.
 * @param string Es el valor que voy a utilizar para realizar mi conmparacion dentro de mi condicional.
 * @param string Es el titulo que le voy a asignar a mi html.
 * @param string Es el valor que se utilizará en el atributo href del enlace.
 */
function resaltado(string $home, string $valor, string $titulo){
    if($home === $valor) {
        echo '<a href="index.php?home='.$valor.'" class="violeta">' . $titulo . '</a>';
    } else {
        echo '<a href="index.php?home='.$valor.'" class="nav-link">' . $titulo . '</a>';
    }
}


/**
 * Función que se encarga de resaltar los enlaces en caso de que el usuario se encuentre en dicha vista.
 * @param string Es el valor que voy a utilizar para realizar mi conmparacion dentro de mi condicional.
 * @param string Es el titulo que le voy a asignar a mi html.
 * @param string Es el valor que se utilizará en el atributo href del enlace.
 */
function resaltado_boton(string $home, string $valor, string $titulo){
    if($home === $valor) {
        echo '<button type="button" class="dropdown-toggle violeta2" data-bs-toggle="dropdown" aria-expanded="false">' . $titulo . '</button>';
    } else {
        echo '<button type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . $titulo . '</button>';
    }
}

/**
 * Función que se encarga de resaltar los enlaces en caso de que el usuario se encuentre en dicha vista, es una modificacion de "resaltado_boton" ya que elimina clases y atributos "dropdown".
 * @param string Es el valor que voy a utilizar para realizar mi conmparacion dentro de mi condicional.
 * @param string Es el titulo que le voy a asignar a mi html.
 * @param string Es el valor que se utilizará en el atributo href del enlace.
 */
function resaltado_boton2(string $home, string $valor, string $titulo){
    if($home === $valor) {
        echo '<button type="button" class=" violeta2">' . $titulo . '</button>';
    } else {
        echo '<button type="button" class="nav-link">' . $titulo . '</button>';
    }
}
?>

    
