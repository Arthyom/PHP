<?php
    namespace vehiculo;
    class Carro 
    {
        protected $color;
        protected $preci;

        public function __construct($precio, $color){
            $this->$preci = $precio;
            $this->color  = $color;
        }
        public function getColor(){
            return $this->$color;
        }

        public function setColor($color){
            $this->$color = $color;
        }


        public function getPreci(){
            return $this->$color;
        }

        public function setPreci($preci){
            $this->$preci = $preci;
        }
    }

    class CarroElectrico extends Carro
    {
        public function __construct(){
            parent::__construct("$10", "negro");
        }
    }
    
    
    namespace vehiculo\avion;
    class Avion{
        private $comp;

        public function setComp($comp){
            $this->$comp;
        }
    }


    namespace vehiculo\tren;
    class Tren{
        private $comp;

        public function setComp($comp){
            $this->$comp;
        }
    }





?>