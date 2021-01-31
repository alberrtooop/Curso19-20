<?php
include_once './lib/Session.php';
    class carrito extends Sesion {

        

       public function __construct($Sesion_name){
            parent::__construct('carrito');
       }

        public function add($ID, $Nombre, $precio, $Cantidad){
            if($this->getValue() == NULL){
                $items = [$ID, $Nombre, $precio, $Cantidad];
            }
            return $this->setValue($items);
         }
    }

?>