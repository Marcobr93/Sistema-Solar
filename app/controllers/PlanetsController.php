<?php
namespace App\Controllers;

use App\Models\Planet;
use Sirius\Validation\Validator;


class PlanetsController extends BaseController {

    /**
     * Ruta [GET] /planets/new que muestra el formulario de añadir una nueva distribución.
     *
     * @return string Render de la web con toda la información.
     */
    public function getNew(){

        $errors = array();  // Array donde se guardaran los errores de validación
        $error = false;     // Será true si hay errores de validación.

        $webInfo = [
            'title'     => 'Añadir Planeta',
            'h1'        => 'Añadir Planeta',
            'submit'    => 'Añadir',
            'method'    => 'POST'
        ];

        // Se construye un array asociativo $planet con todas sus claves vacías
        $planet = array_fill_keys(["nombrePlaneta","imagen", "simbolo", "inclinacionOrbital", "inclinacionAxial",
            "periodoOrbitalSideral", "periodoOrbitalSidonico", "velocidadOrbital", "distanciaSol", "afelio", "perihelio",
            "diametro", "circunferencia", "superficieKm", "relacionSuperficieTierra", "volumen", "masa", "satelitesNaturales",
            "velocidadEscape", "albedo"], "");

        return $this->render('formPlanets.twig', [
            'planet'                     => $planet,
            'errors'                     => $errors,
            'webInfo'                    => $webInfo
        ]);
    }

    /**
     * Ruta [POST] /planets/new que procesa la introducción de una nueva distribución.
     *
     * @return string Render de la web con toda la información.
     */
    public function postNew(){

        $webInfo = [
            'title'     => 'Añadir Planeta',
            'h1'        => 'Añadir Planeta',
            'submit'    => 'Añadir',
            'method'    => 'POST'
        ];

        if(!empty($_POST) ){

            $validator = new Validator();

            $requiredFieldMessageError = "El {label} es requerido";
            $requiredFieldMessageError2 = "La {label} es requerida";

            $validator->add('nombrePlaneta:Nombre del Planeta', 'required',[],$requiredFieldMessageError);
            $validator->add('inclinacionOrbital:Inclinación Orbital', 'required',[],$requiredFieldMessageError2);
            $validator->add('inclinacionAxial:Inclinación Axial', 'required',[],$requiredFieldMessageError2);
            $validator->add('periodoOrbitalSideral:Periodo Orbital Sideral', 'required',[],$requiredFieldMessageError);
            $validator->add('periodoOrbitalSidonico:Periodo Orbital Sidonico', 'required',[],$requiredFieldMessageError);
            $validator->add('velocidadOrbital:Velocidad Orbital', 'required',[],$requiredFieldMessageError2);
            $validator->add('distanciaSol:Distancia del Sol', 'required',[],$requiredFieldMessageError2);
            $validator->add('afelio:Afelio', 'required',[],$requiredFieldMessageError);
            $validator->add('perihelio:Perihelio', 'required',[],$requiredFieldMessageError);
            $validator->add('diametro:Diámetro', 'required',[],$requiredFieldMessageError);
            $validator->add('circunferencia:Circunferencia', 'required',[],$requiredFieldMessageError2);
            $validator->add('superficieKm:Superficie en Km', 'required',[],$requiredFieldMessageError2);
            $validator->add('relacionSuperficieTierra:Relación Superficie Tierra', 'required',[],$requiredFieldMessageError2);
            $validator->add('volumen:Volumen', 'required',[],$requiredFieldMessageError);
            $validator->add('masa:Masa', 'required',[],$requiredFieldMessageError2);
            $validator->add('satelitesNaturales:Satélites Naturales', 'required',[],$requiredFieldMessageError);
            $validator->add('velocidadEscape:Velocidad De Escape', 'required',[],$requiredFieldMessageError2);
            $validator->add('albedo:Albedo', 'required',[],$requiredFieldMessageError);

            // Recibo los datos del formulario
            $planet['nombrePlaneta'] = htmlspecialchars(trim($_POST['nombrePlaneta']));
            $planet['imagen'] = htmlspecialchars(trim($_POST['imagen']));
            $planet['simbolo'] = htmlspecialchars(trim($_POST['simbolo']));
            $planet['inclinacionOrbital'] = htmlspecialchars(trim($_POST['inclinacionOrbital']));
            $planet['inclinacionAxial'] = htmlspecialchars(trim($_POST['inclinacionAxial']));
            $planet['periodoOrbitalSideral'] = htmlspecialchars(trim($_POST['periodoOrbitalSideral']));
            $planet['periodoOrbitalSidonico'] = htmlspecialchars(trim($_POST['periodoOrbitalSidonico']));
            $planet['velocidadOrbital'] = htmlspecialchars(trim($_POST['velocidadOrbital']));
            $planet['distanciaSol'] = htmlspecialchars(trim($_POST['distanciaSol']));
            $planet['afelio'] = htmlspecialchars(trim($_POST['afelio']));
            $planet['perihelio'] = htmlspecialchars(trim($_POST['perihelio']));
            $planet['diametro'] = htmlspecialchars(trim($_POST['diametro']));
            $planet['circunferencia'] = htmlspecialchars(trim($_POST['circunferencia']));
            $planet['superficieKm'] = htmlspecialchars(trim($_POST['superficieKm']));
            $planet['relacionSuperficieTierra'] = htmlspecialchars(trim($_POST['relacionSuperficieTierra']));
            $planet['volumen'] = htmlspecialchars(trim($_POST['volumen']));
            $planet['masa'] = htmlspecialchars(trim($_POST['masa']));
            $planet['satelitesNaturales'] = htmlspecialchars(trim($_POST['satelitesNaturales']));
            $planet['velocidadEscape'] = htmlspecialchars(trim($_POST['velocidadEscape']));
            $planet['albedo'] = htmlspecialchars(trim($_POST['albedo']));

            if ($validator->validate($_POST)) {
                $planet = new Planet([
                    'nombrePlaneta'              => $planet['nombrePlaneta'],
                    'imagen'                     => $planet['imagen'],
                    'simbolo'                    => $planet['simbolo'],
                    'inclinacionOrbital'         => $planet['inclinacionOrbital'],
                    'inclinacionAxial'           => $planet['inclinacionAxial'],
                    'periodoOrbitalSideral'      => $planet['periodoOrbitalSideral'],
                    'periodoOrbitalSidonico'     => $planet['periodoOrbitalSidonico'],
                    'velocidadOrbital'           => $planet['velocidadOrbital'],
                    'distanciaSol'               => $planet['distanciaSol'],
                    'afelio'                     => $planet['afelio'],
                    'perihelio'                  => $planet['perihelio'],
                    'diametro'                   => $planet['diametro'],
                    'circunferencia'             => $planet['circunferencia'],
                    'superficieKm'               => $planet['superficieKm'],
                    'relacionSuperficieTierra'   => $planet['relacionSuperficieTierra'],
                    'volumen'                    => $planet['volumen'],
                    'masa'                       => $planet['masa'],
                    'satelitesNaturales'         => $planet['satelitesNaturales'],
                    'velocidadEscape'            => $planet['velocidadEscape'],
                    'albedo'                     => $planet['albedo']
                ]);
                $planet->save();

                // Mando la aplicación a la página de inicio
                header('Location: ' . BASE_URL);
            }else{
                $errors = $validator->getMessages();
            }
        }
        return $this->render('formPlanets.twig', [
            'planet'                     => $planet,
            'errors'                     => $errors,
            'webInfo'                    => $webInfo
        ]);
    }

    /**
     * Ruta [GET] /planets/edit/{id} que muestra el formulario de actualización de una nueva distribución.
     *
     * @param id Código de la distribución.
     *
     * @return string Render de la web con toda la información.
     */
    public function getEdit($id){

        $errors = array();  // Array donde se guardaran los errores de validación

        $webInfo = [
            'title'     => 'Editar Planeta',
            'h1'        => 'Actualizar Planeta',
            'submit'    => 'Actualizar',
            'method'    => 'PUT'
        ];

        // Recuperar datos
        $planet = Planet::find($id);

        if( !$planet ){
            header('Location: home.twig');
        }

        return $this->render('formPlanets.twig', [
            'planet'                     => $planet,
            'errors'                     => $errors,
            'webInfo'                    => $webInfo
        ]);
    }

    /**
     * Ruta [PUT] /planets/edit/{id} que actualiza toda la información de una distribución. Se usa el verbo
     * put porque la actualización se realiza en todos los campos de la base de datos.
     *
     * @param id Código de la distribución.
     *
     * @return string Render de la web con toda la información.
     */
    public function putEdit($id){

        $errors = array();

        $webInfo = [
            'title'     => 'Editar Planeta',
            'h1'        => 'Actualizar Planeta',
            'submit'    => 'Actualizar',
            'method'    => 'PUT'
        ];

        if(!empty($_POST) ){
            $validator = new Validator();

            $requiredFieldMessageError = "El {label} es requerido";
            $requiredFieldMessageError2 = "La {label} es requerida";

            $validator->add('nombrePlaneta:Nombre del Planeta', 'required',[],$requiredFieldMessageError);
            $validator->add('inclinacionOrbital:Inclinación Orbital', 'required',[],$requiredFieldMessageError2);
            $validator->add('inclinacionAxial:Inclinación Axial', 'required',[],$requiredFieldMessageError2);
            $validator->add('periodoOrbitalSideral:Periodo Orbital Sideral', 'required',[],$requiredFieldMessageError);
            $validator->add('periodoOrbitalSidonico:Periodo Orbital Sidonico', 'required',[],$requiredFieldMessageError);
            $validator->add('velocidadOrbital:Velocidad Orbital', 'required',[],$requiredFieldMessageError2);
            $validator->add('distanciaSol:Distancia del Sol', 'required',[],$requiredFieldMessageError2);
            $validator->add('afelio:Afelio', 'required',[],$requiredFieldMessageError);
            $validator->add('perihelio:Perihelio', 'required',[],$requiredFieldMessageError);
            $validator->add('diametro:Diámetro', 'required',[],$requiredFieldMessageError);
            $validator->add('circunferencia:Circunferencia', 'required',[],$requiredFieldMessageError2);
            $validator->add('superficieKm:Superficie en Km', 'required',[],$requiredFieldMessageError2);
            $validator->add('relacionSuperficieTierra:Relación Superficie Tierra', 'required',[],$requiredFieldMessageError2);
            $validator->add('volumen:Volumen', 'required',[],$requiredFieldMessageError);
            $validator->add('masa:Masa', 'required',[],$requiredFieldMessageError2);
            $validator->add('satelitesNaturales:Satélites Naturales', 'required',[],$requiredFieldMessageError);
            $validator->add('velocidadEscape:Velocidad De Escape', 'required',[],$requiredFieldMessageError2);
            $validator->add('albedo:Albedo', 'required',[],$requiredFieldMessageError);

            // Recibo los datos del formulario
            $planet['id'] = $id;
            $planet['nombrePlaneta'] = htmlspecialchars(trim($_POST['nombrePlaneta']));
            $planet['imagen'] = htmlspecialchars(trim($_POST['imagen']));
            $planet['simbolo'] = htmlspecialchars(trim($_POST['simbolo']));
            $planet['inclinacionOrbital'] = htmlspecialchars(trim($_POST['inclinacionOrbital']));
            $planet['inclinacionAxial'] = htmlspecialchars(trim($_POST['inclinacionAxial']));
            $planet['periodoOrbitalSideral'] = htmlspecialchars(trim($_POST['periodoOrbitalSideral']));
            $planet['periodoOrbitalSidonico'] = htmlspecialchars(trim($_POST['periodoOrbitalSidonico']));
            $planet['velocidadOrbital'] = htmlspecialchars(trim($_POST['velocidadOrbital']));
            $planet['distanciaSol'] = htmlspecialchars(trim($_POST['distanciaSol']));
            $planet['afelio'] = htmlspecialchars(trim($_POST['afelio']));
            $planet['perihelio'] = htmlspecialchars(trim($_POST['perihelio']));
            $planet['diametro'] = htmlspecialchars(trim($_POST['diametro']));
            $planet['circunferencia'] = htmlspecialchars(trim($_POST['circunferencia']));
            $planet['superficieKm'] = htmlspecialchars(trim($_POST['superficieKm']));
            $planet['relacionSuperficieTierra'] = htmlspecialchars(trim($_POST['relacionSuperficieTierra']));
            $planet['volumen'] = htmlspecialchars(trim($_POST['volumen']));
            $planet['masa'] = htmlspecialchars(trim($_POST['masa']));
            $planet['satelitesNaturales'] = htmlspecialchars(trim($_POST['satelitesNaturales']));
            $planet['velocidadEscape'] = htmlspecialchars(trim($_POST['velocidadEscape']));
            $planet['albedo'] = htmlspecialchars(trim($_POST['albedo']));


            if ( $validator->validate($_POST) ){
                $planet = Planet::where('id', $id)->update([
                    'id'                         => $planet['id'],
                    'nombrePlaneta'              => $planet['nombrePlaneta'],
                    'imagen'                     => $planet['imagen'],
                    'simbolo'                    => $planet['simbolo'],
                    'inclinacionOrbital'         => $planet['inclinacionOrbital'],
                    'inclinacionAxial'           => $planet['inclinacionAxial'],
                    'periodoOrbitalSideral'      => $planet['periodoOrbitalSideral'],
                    'periodoOrbitalSidonico'     => $planet['periodoOrbitalSidonico'],
                    'velocidadOrbital'           => $planet['velocidadOrbital'],
                    'distanciaSol'               => $planet['distanciaSol'],
                    'afelio'                     => $planet['afelio'],
                    'perihelio'                  => $planet['perihelio'],
                    'diametro'                   => $planet['diametro'],
                    'circunferencia'             => $planet['circunferencia'],
                    'superficieKm'               => $planet['superficieKm'],
                    'relacionSuperficieTierra'   => $planet['relacionSuperficieTierra'],
                    'volumen'                    => $planet['volumen'],
                    'masa'                       => $planet['masa'],
                    'satelitesNaturales'         => $planet['satelitesNaturales'],
                    'velocidadEscape'            => $planet['velocidadEscape'],
                    'albedo'                     => $planet['albedo']
                ]);
                // Si se guarda sin problemas se redirecciona la aplicación a la página de inicio
                header('Location: ' . BASE_URL);
            }else{
                $errors = $validator->getMessages();
            }
        }
        return $this->render('formPlanets.twig', [
            'planet'                     => $planet,
            'errors'                     => $errors,
            'webInfo'                    => $webInfo
        ]);
    }


    /**
     * Ruta raíz [GET] /planets para la dirección home de la aplicación. En este caso se muestra la lista de distribuciones.
     *
     * @return string Render de la web con toda la información.
     *
     * Ruta [GET] planets/{id} que muestra la página de detalle de la distribución.
     *
     * @param id Código de la distribución.
     *
     * @return string Render de la web con toda la información.
     */
    public function getIndex($id = null){
        if( is_null($id) ){
            $webInfo = [
                'title' => 'Sistema Solar'
            ];

            $planets = Planet::query()->orderBy('id','desc')->get();

            return $this->render('home.twig', [
                'planets' => $planets,
                'webInfo' => $webInfo
            ]);
        }else{
            // Recuperar datos

            $webInfo = [
                'title' => 'Página del Planeta'
            ];

            $planet = Planet::find($id);
            if( !$planet ){
                return $this->render('404.twig', ['webInfo' => $webInfo]);
            }

            //dameDato($planet);
            return $this->render('planet/planet.twig', [
                'planet' => $planet,
                'webInfo'=> $webInfo]);
        }

    }

    /**
     * Ruta [DELETE] /planets/delete para eliminar la distribución con el código pasado
     */
    public function deleteIndex(){
        $id = $_REQUEST['id'];

        $planet = Planet::destroy($id);

        header("Location: ". BASE_URL);
    }
}