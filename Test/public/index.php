<?php

use Phalcon\Loader;
//Phalcon Dependency Injection which automatically register most of the components
//that are required by an application and come with Phalcon as standard
use Phalcon\Di\FactoryDefault;
//Register the view service, setting the directory where the framework will find the view files.
use Phalcon\Mvc\View;
//Register a base URI, that will offer the functionality to create all URIs by Phalcon
use Phalcon\Url;
//Handle user requests
use Phalcon\Mvc\Application;


define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
// ...

$loader = new Loader();

$loader->registerDirs(
    [
        APP_PATH . '/controllers/',
        APP_PATH . '/models/',
    ]
);

$loader->register();

// Create a DI
$container = new FactoryDefault();
//Set up the View Component
$container->set(
    'view',
    function () {
        $view = new View();
        $view->setViewsDir(APP_PATH . '/views/');

        return $view;
    }
);
//Set a base URL to  ensure that whether you run your application through the top directory
//or a subdirectory, all your URIs will be correct
$container->set(
    'url',
    function () {
        $url = new Url();
        $url->setBaseUri('/');

        return $url;
    }
);
//The component accepts the request by the user, detect the routes
//and dispatch the controller and render the view returning back the results.
$application = new Application($container);
try {
    $response = $application->handle(
        $_SERVER["REQUEST_URI"]
    );
    
    $response->send();
} catch (\Exception $e) {
    echo 'Exception', $e->getMessage();
}
