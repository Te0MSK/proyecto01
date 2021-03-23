<?php

class Deportivo extends Car
{

    private $estilo = "Rapido y Furioso";
    
    public $tieneCapota = false;



    public function conducirConEstilo()
    {

        return "Conducir un " . $this->modelo . "<i>" . $this->estilo . "</i>";
    }

    public function verMiModelo(){

        echo "<br />Desde la clase hija: ".$this->modelo;



    }

    public function getModelo()
    {

        return "El nuevo modelo es:   ".$this -> modelo;
    }

    public function calcNumKilomConTanqueLleno(){

        $kilometros = $this -> contenidoTanque*40;
        return $kilometros;


    }
}
