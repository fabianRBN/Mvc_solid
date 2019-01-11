<?php

/**
 * Front controller
 *
 * PHP version 5.4
 */

/**
 * Composer
 */
require '../vendor/autoload.php';


/**
 * Twig
 */
Twig_Autoloader::register();


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

$routes = Core\Routes::get();

$session = Core\Session::get('sivoz_auth');



if(Core\Session::get('sivoz_firma') !== false){
    $data = [
        'cartera' => Core\Session::get('sivoz_firma')->cartera,
        'usuario' => Core\Session::get('sivoz_firma')->usuario
    ];
    $firma = App\Models\Firma::find($data);

    if(!$firma){
        Core\Router::redirect('/logout');
    }else{
        if(Core\Session::get('sivoz_auth') !== false){
        }
    }
}

foreach($routes as $route){
    if($route->activo == 1){
        if($route->permisos == 'all'){
            $router->add($route->ruta, ['controller' => $route->controlador, 'action' => $route->accion]);
        }else{
            $permisos = explode(',',$route->permisos);
            $found = false;
            
            foreach($permisos as $permiso){
                if($permiso == $session->permiso){
                    $found = true;
                }
            }

            if($found == true){
                
                $router->add($route->ruta, ['controller' => $route->controlador, 'action' => $route->accion]);
            }else{
                $router->add($route->ruta, ['controller' => 'ErrorController', 'action' => 'permiso']);
            }
        }
    }
}



// Add the routes
 //$router->add('', ['controller' => 'Home', 'action' => 'index']);
// echo json_encode($router->getRoutes());

// $router->add('ventas', ['controller' => 'Venta', 'action' => 'index']);
// $router->add('login', ['controller' => 'Usuario', 'action' => 'login']);

// $router->add('{controller}/{action}');
// $router->add('{controller}/{id:\d+}/{action}');
// $router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

$router->dispatch($_SERVER['QUERY_STRING']);
