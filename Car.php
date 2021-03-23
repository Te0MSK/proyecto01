<?php
abstract class Car
{

    public $empresa;
    public $color = "rojo";
    public $tieneCapota = true;
    protected $contenidoTanque;
    public $modelo = "sin definir ";


    public function __construct($mod = "sin definir")
    {

        if ($mod != "sin definir") {

            $this->modelo = $mod;
        }
    }


    abstract public function calcNumKilomConTanqueLleno();

public function setContenidoTanque($volumen){

$this -> contenidoTanque = $volumen;


}



    private $modelos_permitidos = array("audi", "mazda", "mercedez", "lamborghini");

    public function pitar()
    {
        return "beep soy un carro de modelo: ".$this -> modelo;
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
