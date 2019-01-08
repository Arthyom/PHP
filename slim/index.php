<?php
use \Psr\Http\Message\ServerRequestInterface as Request;

use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function (Request $req, Response $res) use($app){
    
    return $res->withRedirect("http://localhost/slim/templates/index.php");
});

$app->get('/hola/{nombre}', function ( $req, $res, $arg) use($app) {
    echo "hola ". $arg['nombre'];
});

$app->get( "/templates/", function (Request $req, Response $res, $arg) use($app){
    return $res->withRedirect("http://localhost/slim/f2.php");
});


$app->run();