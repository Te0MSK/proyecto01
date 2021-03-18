<?php
class Car
{

    public $empresa;
    public $color = "rojo";
    public $tieneCapota = true;
    public $contenidoTanque;
    private $modelo;


    public function __construct($mod = "sin definir")
    {

        if ($mod != "sin definir") {

            $this->modelo = $mod;
        }
    }




    private $modelos_permitidos = array("audi", "mazda", "mercedez", "lamborghini");

    public function pitar()
    {
        return "beep";
    }

    public function pedirRevision()
    {
        echo "<br/>Soy un carro de marca: " . $this->empresa . " necesito una revision   
    <br/> Necesito repintar mi color: " . $this->color . " " . $this->pitar();
    }

    public function levantarCapota()
    {
        if ($this->tieneCapota) echo "<br/>Levantando la capota";
        else echo "<br/>No tengo capota para levantar";
    }
    //agrega galones de gasolina
    public function llenar($cantidad)
    {
        $this->contenidoTanque += $cantidad;
        return $this;
    }
    //extrae galones de gasolina cuz he can move
    public function correr($kilometros)
    {
        $galonesConsumidos = $kilometros / 50;
        $this->contenidoTanque -= $galonesConsumidos;
        return $this;
    }

    public function getModelo()
    {

        return "el <b>" . __CLASS__ . "<b/> tiene el modelo:" . $this->modelo;
    }

    public function setModelo($mod)
    {


        if (in_array($mod, $this->modelos_permitidos)) $this->modelo = $mod;
        else $this->modelo = "sin definir";
    }
}
