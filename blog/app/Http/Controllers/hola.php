<?php

namespace laraDex\Http\Controllers;

use Illuminate\Http\Request;

class hola extends Controller
{
    public function saludame($nombre,$apellido)
    {
        return "El controlador dice: hora perro tu 
        nombre es: ". $nombre . " y tu apellido es ". $apellido;

    }
}
