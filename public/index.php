<?php
require_once '../vendor/autoload.php';

use Phroute\Phroute\RouteCollector;
use Illuminate\Database\Capsule\Manager as Capsule;

// Punto de entrada a la aplicación
require_once '../helpers.php';

session_start();

$baseDir = str_replace(
    basename($_SERVER['SCRIPT_NAME']),
    '',
    $_SERVER['SCRIPT_NAME']);

$baseUrl = $_SERVER['HTTP_HOST'] . $baseDir;
$protocol = (strpos($baseUrl, 'heroku')) ? "https://" : "http://";
$baseUrl = $protocol.$baseUrl;
define('BASE_URL', $baseUrl);

if(file_exists(__DIR__.'/../.env')){
    $dotenv = new Dotenv\Dotenv(__DIR__.'/..');
    $dotenv->load();
}

// Instancia de Eloquent
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$route = $_GET['route'] ?? "/";

$router = new RouteCollector();

// Filtro para aplicar a rutas a USUARIOS AUTENTICADOS
// en el sistema
$router->filter('auth', function(){
    if(!isset($_SESSION['userId'])){
        header('Location: '. BASE_URL);
        return false;
    }
});

$router->group(['before' => 'auth'], function ($router){
    $router->get('/planets/new', ['\App\Controllers\PlanetsController', 'getNew']);
    $router->post('/planets/new', ['\App\Controllers\PlanetsController', 'postNew']);
    $router->get('/planets/edit/{id}', ['\App\Controllers\PlanetsController', 'getEdit']);
    $router->put('/planets/edit/{id}', ['\App\Controllers\PlanetsController', 'putEdit']);
    $router->delete('/planets/', ['\App\Controllers\PlanetsController', 'deleteIndex']);
    $router->get('/logout', ['\App\Controllers\HomeController', 'getLogout']);
});

// Filtro para aplicar a rutas a USUARIOS NO AUTENTICADOS
// en el sistema
$router->filter('noAuth', function(){
    if( isset($_SESSION['userId'])){
        header('Location: '. BASE_URL);
        return false;
    }
});

$router->group(['before' => 'noAuth'], function ($router){
    $router->get('/login', ['\App\Controllers\HomeController', 'getLogin']);
    $router->post('/login', ['\App\Controllers\HomeController', 'postLogin']);
    $router->get('/register', ['\App\Controllers\HomeController', 'getRegister']);
    $router->post('/register', ['\App\Controllers\HomeController', 'postRegister']);
});

// Rutas sin filtros
$router->get('/',['\App\Controllers\HomeController', 'getIndex']);
$router->get('/solarSystem/sistemaSolar',['\App\Controllers\HomeController', 'getSolarSystem']);
$router->get('/planets/{id}', ['\App\Controllers\PlanetsController', 'getIndex']);
$router->post('/planets/{id}', ['\App\Controllers\PlanetsController', 'postIndex']);
$router->controller('/api',App\Controllers\ApiController::class);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$method = $_REQUEST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$response = $dispatcher->dispatch($method, $route);

// Print out the value returned from the dispatched function
echo $response;