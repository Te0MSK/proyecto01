<?php
 abstract class Administrador extends Usuario{

    protected $salario;

   abstract function definirArea();

public function mostrarSuCargo(){
    return "Administrador";
}


/*
public function saludar(){
return "Hola administrador". $this->getNombre() . " " .  $this->getApellido();

}
*/
//EL FINAL EVITA QUE ME SOBREESCRIBA EL METODO, si quiero llama a este metodo, debo cambiarle el nombre



public function setSalario($sal)
    {

        $this->salario = $sal;
    }

    public function getSalario()
    {

        return "El salario del Usuario es " . $this->salario;
    }


}