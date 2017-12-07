<?php

function dameDato($dato){
    echo '<pre>';
    print_r($dato);
    echo '</pre>';
    die();
}

function calcularCumpleaños($años){
    $fecha = htmlspecialchars($_POST['fecha']);
    $nac = new DateTime($fecha);
    $today = new DateTime('today');

    do{
        $proximoCumpleaños = $nac ->add(new DateInterval($años))->format('Y-m-d H:i:s');
    }while ($nac < $today);

    return$proximoCumpleaños;

}
