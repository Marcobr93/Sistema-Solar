<?php
namespace App\Controllers;

use App\Controllers\Auth\AuthController;
use App\Controllers\Auth\RegisterController;

class HomeController extends BaseController {
    /**
     * Ruta / donde se muestra la página de inicio del proyecto.
     *
     * @return string Render de la página
     */
    public function getIndex(){
        $planets = new PlanetsController();
        return $planets->getIndex();
    }
    /**
     * Ruta / donde se muestra la página de login del proyecto.
     *
     * @return string Render del login
     */
    public function getLogin(){
        $auth = new AuthController();
        return $auth->getLogin();
    }
    /**
     * Ruta / donde se envían los datos del login.
     *
     * @return string Render del login
     */
    public function postLogin(){
        $auth = new AuthController();
        return $auth->postLogin();
    }
    /**
     * Ruta / donde se muestra la página de registro del proyecto.
     *
     * @return string Render del registro
     */
    public function getRegister(){
        $register = new RegisterController();
        return $register->getRegister();
    }
    /**
     * Ruta / donde se envían los datos del registro.
     *
     * @return string Render del registro
     */
    public function postRegister(){
        $register = new RegisterController();
        return $register->postRegister();
    }
    /**
     * Ruta / donde se desloguea un usuario.
     *
     * @return string Te devuelve a la página de inicio
     */
    public function getLogout(){
        $auth = new AuthController();
        return $auth->getLogout();
    }

}