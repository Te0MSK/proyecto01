<?php 

class Honda extends Car {


public function calcNumKilomConTanqueLleno()
{
    $kilometros = $this -> contenidoTanque*30;
    return $kilometros;
}



}