<?php

class Dado
{
    //Variable
    private $minNumDado = 1;
    private $maxNumDado = 12;

    //Contructor
    function __construct($minNumDado, $maxNumDado)
    {
        $this->set_MinNumDado($minNumDado);
        $this->set_maxNumDado($maxNumDado);
    }

    //SETTER
    public function set_MinNumDado($minNumDado)
    {
        if (($minNumDado >= 0) && ($minNumDado < $this->maxNumDado))
            $this->minNumDado = $minNumDado;
    }
    public function set_maxNumDado($maxNumDado)
    {
        if (($maxNumDado <= 12) && ($maxNumDado > $this->minNumDado))
            $this->maxNumDado = $maxNumDado;
    }


    //GETTER
    public function get_MinNumDado()
    {
        return $this->MinNumDado;
    }

    public function get_maxNumDado()
    {
        return $this->maxNumDado;
    }


    //Funcion
    public function TirarDado()
    {
        return rand($this->minNumDado, $this->maxNumDado);
    }
}
