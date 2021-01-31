<?php
    class Sesion{
       private $SESSION = NULL; 

       public function __construct($Sesion_name){
            
            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 
        
            if(!isset($_SESSION[$Sesion_name])){
                $_SESSION[$Sesion_name] = null;
                //Creamos la sesion $Sesion_name
            }
            $this->SESSION = $Sesion_name;
       }

       public function setValue($value){
           $_SESSION[$this->SESSION] = $value;
       }
       public function getValue(){
        return $_SESSION[$this->SESSION];
        }
    }

?>