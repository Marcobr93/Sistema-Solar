<?php
namespace App\Controllers;

class SolarSystemController extends BaseController {
    public function getSistemaSolar(){

            $webInfo = [
                'title' => 'Sistema Solar'
            ];

            return $this->render('solarSystem.twig', ['webInfo' => $webInfo
            ]);

    }
}