<?php

require 'ProgramadorBackend.php';
require 'ProgramadorFrontend.php';

class Programador extends Usuario implements ProgramadorFrontend,ProgramadorBackend{
private $lenguajes_backend = array();
private $lenguajes_frontend = array();
   

public function agregarLenguajeDeProgramacionBackend($lenguaje){
    $lenguajes_backends= $this -> lenguajes_backend;
 array_push($lenguajes_backends,$lenguaje);
 print_r($lenguaje."," );
 
    
}
public function mostrarLenguajesDeProgramacionBackend(){
    $lenguajes_backends= $this -> lenguajes_backend;
   foreach($lenguajes_backends as $nombres)
   {
echo "$nombres <br>";
   }

}
public function agregarLenguajeDeProgramacionFrontend($lenguaje){
    $lenguajes_frontends= $this -> lenguajes_frontend;
    array_push($lenguajes_frontends,$lenguaje);
    print_r($lenguaje."," );
}
public function mostrarLenguajesDeProgramacionFrontend(){
    $lenguajes_frontends= $this -> lenguajes_frontend;
    foreach($lenguajes_frontends as $nombres)
    {
 echo "$nombres <br>";
    }
}
}
