<?php

function dameDato($dato){
    echo '<pre>';
    print_r($dato);
    echo '</pre>';
    die();
}

//$fecha = htmlspecialchars($_POST['fechaNac']);
//$nac = new DateTime($fecha);
//$today = new DateTime('today');
//
//$diasTierra = $nac->diff($today)->format('%a');
//$añosTierra = $nac->diff($today)->format('%y');
//
//function calcularCumpleaños($años){
//    $fecha = htmlspecialchars($_POST['fecha']);
//    $nac = new DateTime($fecha);
//    $today = new DateTime('today');
//
//    do{
//        $proximoCumpleaños = $nac ->add(new DateInterval($años))->format('Y-m-d H:i:s');
//    }while ($nac < $today);
//
//    return$proximoCumpleaños;
//
//}
//
//define('diaMercurio', 58.6);
//define('añoMercurio', 87.97);
//define('cumpleañosMercurio', 'P87DT23H16M48S'); //87d, 23h, 16min, 48seg
//
//define('diaVenus', 243);
//define('añoVenus', 224.7);
//define('cumpleañosVenus', 'P224DT16H48M'); //224d, 16h, 48min   0,6156  7m, 11d, 14h, 47min, 2seg 'P7M11DT14H47M2S'
//
//define('diaTierra', 0.99);
//define('añoTierra', 365.26);
//define('cumpleañosTierra', 'P1Y'); //365d, 6h, 14min, 24seg      1año, 6h, 14min, 24seg
//
//define('diaMarte', 1.03);
//define('añoMarte', 1.88);
//define('cumpleañosMarte', 'P1Y10M17DT8H38M24S'); // 1año, 10m, 17d, 8h, 38min, 24seg
//
//define('diaJupiter', 0.41);
//define('añoJupiter', 11.86);
//define('cumpleañosJupiter', 'P11Y10M9DT14H24M'); // 11años, 10meses, 9d, 14h, 24min
//
//define('diaSaturno', 0.45);
//define('añoSaturno', 29.46);
//define('cumpleañosSaturno', 'P29Y5M15DT14H24M'); // 29años, 5meses, 15d, 14h, 24min
//
//define('diaUrano', 0.72);
//define('añoUrano', 84.01);
//define('cumpleañosUrano', 'P84Y3D'); // 84años, 1mes, 6dias
//
//define('diaNeptuno', 0.67);
//define('añoNeptuno', 164.79);
//define('cumpleañosNeptuno', 'P164Y9M14DT9H36M'); // 164años, 9meses, 14dias, 9horas, 36min
//
//define('diaPluton', 6.39);
//define('añoPluton', 248.59);
//define('cumpleañosPluton', 'P248Y7M2DT9H36M'); // 248años, 7meses, 2dias  9H, 36MIN
