<?php
namespace App\Controllers;

use App\Models\Planet;

class ApiController{

    public function getPlanets(){
        $distros = Planet::all();

        header('Content-Type: application/json'); // cabecera que va pegada a la petición, header location es quien te redirige.
        return json_encode($distros);
    }

    public function getPlanet($id){
        $distro = Planet::find($id);

        header('Content-Type: application/json');
        return json_encode($distro);
    }

    public function postPlanet(){
        // Creo una distro en la BD desde un Json.
    }
}