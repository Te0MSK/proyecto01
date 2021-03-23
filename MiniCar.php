<?php

require 'Car2.php';
require 'Vehicle.php';

class MiniCar implements Car2,Vehicle
{

    private $model;
    private $tieneLlantas;



    public function setModel($name)
    {


        $this->model = $name;
    }

    public function getModel()
    {

        return $this->model;
    }

    public function pitar(){

return "Bepp Bepp Dejen pasar. ";

    }

    public function setTieneLlantas($bool)
    {
        $this -> tieneLlantas =$bool;
        
    }
    public function getTieneLlantas()
    {
        return ($this -> tieneLlantas)? "tiene Llantas" : "No tiene Llantas";
        
    }
}


