<?php
namespace App\Controllers;

use App\Models\Planet;

class ApiController {

    public function getPlanets($id = null)
    {
        if (is_null($id)) {
            $planets = Planet::all();

            header('Content-Type: application/json');
            return json_encode($planets);
        } else {
            $planet = Planet::find($id);

            header('Content-Type: application/json');
            return json_encode($planet);
        }
    }
}