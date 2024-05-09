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