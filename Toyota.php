<?php 

class Toyota extends Car {


public function calcNumKilomConTanqueLleno()
{
    $kilometros = $this -> contenidoTanque*33;
    return $kilometros;
}

public function getColor(){

return "beige";
}


}