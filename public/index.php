<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add routes
$app->get('/', function (Request $request, Response $response) {
    $htmlContent = "
    <p>Hola</p>
    ";

    $response -> getBody()->write($htmlContent);
    return $response->withHeader('Content-Type', 'text/html');
});




$app->run();