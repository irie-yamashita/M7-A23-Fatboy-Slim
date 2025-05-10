<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$pdo = new PDO ('sqlite:./../Slim/data/artistes.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add routes
$app->get('/', function (Request $request, Response $response) use ($pdo) {
    $stmt = $pdo->query("SELECT * FROM artistes");
    $artistes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $htmlContent = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>ITBfy</title>
        <link rel='stylesheet' href='css/index.css'>
    </head>
    <body>
        <header>
            <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/480px-Spotify_logo_without_text.svg.png' alt='logo' id='logo'>
            <h1>ITBfy</h1>
        </header>
    <main>
    <h1>ARTISTES</h1>
    <section id='sec_artistes'>
    ";

    foreach ($artistes as $artista) {
        $htmlContent .= "
        <article class='art_artista'>
            <p><strong>$artista[nom]</strong></p>
            <img src='$artista[imatge]' alt='fotoArtista' class='fotoArtista'>
            <a href='/artista/$artista[id]'>Veure detall</a>
        </article>";
    }

    $htmlContent .= "
        </section>
        </main>
        </body>
        </html>
    ";


    $response -> getBody()->write($htmlContent);
    return $response->withHeader('Content-Type', 'text/html');
});

$app->get('/artista/{id}', function (Request $request, Response $response, $args) use ($pdo) { //$args !!!

    //obtinc id
    $id = $args['id'];

    $stmt = $pdo->query("SELECT * FROM artistes WHERE id = $id");
    $artista = $stmt->fetch(PDO::FETCH_ASSOC);

    $htmlContent = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='../css/detall.css'>
            <title>ITBfy</title>
        </head>
        <body>
        <header>
            <a href='/'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/480px-Spotify_logo_without_text.svg.png' alt='logo' id='logo'></a>
            <h1>ITBfy</h1>
        </header>
        <main>
            <h1>$artista[nom]</h1>
            <section id='sec_infoBasica'>
                <img src='$artista[imatge]' alt='fotoArtista' class='fotoArtista'>
                <div id='info'>
                    <p>Nom real: <br><strong>$artista[nom_real]</strong></p>
                    <p>Data naixament: <br><strong>$artista[data_naix]</strong></p>
                    <p>Lloc naixament: <br><strong>$artista[lloc_naix]</strong></p>
                    <p>Any debut: <br><strong>$artista[any_debut]</strong></p>
                    <div id='xarxes'>
                        <a href='$artista[link_spotify]'>
                            <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd4jbXkWaYRcqw7zkFheo1YSlmlUSaEZyQFw&s' alt='logoSpotify' class='logoXarxa'>
                        </a>
                        <a href='$artista[link_youtube]'>
                            <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2oyuL3f9SA6tjm36ExJCAeSyGRkpyj8w2_w&s' alt='logoYoutube' class='logoXarxa'>
                        </a>
                        <a href='$artista[link_instagram]'>
                            <img src='https://img.icons8.com/win10/512/FFFFFF/instagram-new.png' alt='logoInsta' class='logoXarxa'>
                        </a>
                    </div>
                </div>
            </section>
            <section id='sec_dadesMusica'>
                <div class='quadrat'>
                    <p>OIENTS MENSUALS</p>
                    <p><strong>$artista[oients]</strong></p>
                </div>
                    <div class='quadrat'>
                    <p>GÈNERES MÚSICALS</p>
                    <p><strong>$artista[genere_musical]</strong></p>
                </div>
            </section>

            <section id='sec_biografia'>
                <h2>Biografia</h2>
                <p>$artista[biografia]</p>
            </section>

            <section id='sec_cancons'>
                <h2>CANÇONS</h2>
                <div id='div_cancons'>";

            $cancons = explode(",",$artista["cancons"]);
            foreach ($cancons as $canco) {
                $htmlContent .= "
                <div class='canco'>
                    <strong> | </strong>$canco
                </div>";
            }
            

        $htmlContent .= "
                </div>
            </section>

            <section id='sec_video'>
                <iframe width='560' height='315' src='https://youtu.be/d5gf9dXbPi0?si=mrvjEYqhTHwiTt3_' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
            </section>

        </main>
    ";

       $response -> getBody()->write($htmlContent);
    return $response->withHeader('Content-Type', 'text/html');
});





$app->run();