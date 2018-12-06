<?php
  $datos = array();
 
$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );


$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );


$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );


$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );


$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );


$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );


$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );


$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );


$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );


$datos[] = array(
    "nombre" => "Sushi Bonito",
    "descripcion" => "este es el mejor chuchi",
    "descripcionDetallada" => "chuchi con el mejor sabor al 
                              mejor precio chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio
                              chuchi con el mejor sabor al mejor precio ",
    "precioNormal" => 12.52,
    "precioDescuento" => 10.00,
    "url" => "img/s2.jpg",
    "existencia" => 10
  );



  function listarOferta($idOferta, $dato){
    $oferta = "";
    $oferta = $oferta.'<div class="col-md-3">';
    $oferta = $oferta."<h2>" . $dato["nombre"] . '</h2>';
    $oferta = $oferta.'<img class="img-thumbnail"  src="'.$dato['url'] .'" alt="Imagen de fondo"/>';
    $oferta = $oferta.'<p>'. $dato['descripcionDetallada'] .'</p>';
    $oferta = $oferta.' <p><a class="btn btn-danger" href="#" role="button">';
    $oferta = $oferta."De: $". $dato['precioNormal']. "<strong> a: $". $dato['precioDescuento'] .
                "</strong></a></p></div>"; 

    return $oferta;
  }
