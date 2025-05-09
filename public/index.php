<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$db = new SQLite3 ('./../Slim/data/artistes.db');

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add routes
$app->get('/', function (Request $request, Response $response) {
    /*$stmt = $db->query("SELECT * FROM artistes");
    $result = $this->db->query($stmt);
    $artistes = [];
    while($artista = $result->fetchArray(SQLITE3_ASSOC))
        $artistes[] = $artista;
    return $artista;

    foreach ($artistas as $artista) {
        $htmlContent .= $artista['nom'];
    }*/

    $htmlContent = 'Hola';

    $response -> getBody()->write($htmlContent);
    return $response->withHeader('Content-Type', 'text/html');
});




$app->run();