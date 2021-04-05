<!DOCTYPE html>
<html lang="es">

<head>
  <title>Clases y objetos</title>
  <meta charset="utf-8" <meta name="viewport" content="width=device-width , initial-scale=1 , maximum-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/estilos.css" />
</head>

<body>
  <?php
  require 'Car.php';
  require 'Usuario.php';
  require 'Deportivo.php';
  require 'Honda.php';
  require 'Toyota.php';
  require 'Minicar.php';
  require 'Administrador.php';
  require 'Financiero.php';
  require 'RecursosHumanos.php';
  require 'Programador.php';

  ?>
  <?php

  //$bmw = new Car(); //instanciuacion
  //$mercedes = new Car("modelo-2");
  //$audi = new Car();

  //echo "Color del bmw: $bmw->color";
  //echo "<br/>";
  //echo "Color del mercedes: $mercedes->color";

  //$bmw->color = "azul";
  //$bmw->empresa = "BMW";

  //$mercedes->color = "negro";
  //$mercedes->empresa = "Mercedez Benz";

  //echo "<br/>";
  //echo "Color del bmw: $bmw->color compania: $bmw->empresa";
  //echo "<br/>";
  //echo "Color del mercedes: $mercedes->color compania: $mercedes->empresa";
  //echo "<br/>";
  //echo "Bmw pitando: " .$bmw->pitar();
  //echo "<br/>";
  //echo "Mercedez pitando: " .$mercedes->pitar();

  //echo "<br/><br/> Probando el uso de la variable this";

  //$carro1 = new Car("Modelo-4");
  //$carro2 = new Car();

  //$carro1->tieneCapota=false;
  //$carro1->empresa="Toyota";
  //$carro1->color="Verde";


  //$carro2->empresa="Renault";
  //$carro2->color="Blanco";

  //$carro1->pedirRevision();
  //$carro1->levantarCapota();

  //echo "<br/><br/>";
  //$carro2 ->pedirRevision();
  //$carro2 ->levantarCapota();
  //echo "<br/><br/> Usando el encadenamiento";
  //$carro3= new Car();
  //$gasolina = $carro3 -> llenar(10) -> correr(40) -> contenidoTanque;

  //echo "<br/>El numero de galones que quedan en el tanque son : ". $gasolina . "galones";



  //echo "<br /<br /> Accediendo a un atributo publico";

  //$carro3 ->setModelo ("audi") ;

  //$carro3 -> modelo = "Audi";


  //echo "<br/> Carro  \$3 tiene el siguiente modelo: ".$carro3 -> getModelo();


  //echo "<br/><br/> Imprimiendo modelos <br/>". $bmw  -> getModelo(). "<br/>". $mercedes -> getModelo()."<br/>". 
  //"<br/>". $audi -> getModelo()."<br/>".  "<br/>". $carro1 -> getModelo()."<br/>". "<br/>". $carro2 -> getModelo()."<br/>". "<br/>". $carro3 -> getModelo()."<br/>";


  //$usuario1 = new Usuario("Jorge","Bermudez");
 // echo $usuario1 ->getNombre();
  //$usuario1 ->setNombre("Juan");
 // $usuario1 ->setApellido("Poli");
  //echo "<br />";
 // echo "".$usuario1 ->getNombreCompleto();
 // echo "<br />";
 // echo "<br />";

 //$Administrador = new Administrador("Jorge","Bermudez");
 //echo $Administrador ->getNombre();
 //$Administrador ->setNombre("Juan");
// $Administrador ->setApellido("Poli");
 echo "<br />";
// echo "".$Administrador ->getNombreCompleto();
 echo "<br />";
 echo "<br />";
// echo $Administrador ->mostrarSuCargo();
 echo "<br />";
 echo "<br />";
// echo $Administrador->saludar();
 echo "<br />";
 echo "<br />";
 // SE EJECUTO EL DE LA CLASE ADMINISTRADOR

 $financiero = new Financiero("Phisi","fat");
 echo $financiero ->setSalario("10000");
 echo $financiero ->definirArea();

 echo "<br />";

 $recursoshumanos = new RecursosHumanos("alfa","beta");
 echo $recursoshumanos ->setSalario("20000");
 echo $recursoshumanos ->definirArea();
 echo "<br />";
 echo "<br />";
  $usuario1 = new Programador("Edgar","Sarm");

  $usuario1->agregarLenguajeDeProgramacionBackend("Python") ;
  $usuario1->agregarLenguajeDeProgramacionBackend("C#") ;
  $usuario1->agregarLenguajeDeProgramacionBackend("Java");
echo "<br />";
$usuario1->agregarLenguajeDeProgramacionFrontend("Javascript") ;
$usuario1->agregarLenguajeDeProgramacionFrontend("Jquery") ;
$usuario1->agregarLenguajeDeProgramacionFrontend("Angular") ;

echo $usuario1->getNombreCompleto();
echo "<br />";
 $usuario1->mostrarLenguajesDeProgramacionBackend();

 $usuario1->mostrarLenguajesDeProgramacionFrontend();





  //$usuario2  = new Usuario();
  //$usuario2  ->nombre="Jina";
  //$usuario2  ->apellido="Poli"; 
  //$usuario2 ->saludar();


  //$usuario3  = new Usuario();
  //$usuario3  ->nombre="Jhonny";
  //$usuario3  ->apellido="Ruiz"; 
  //$usuario3 ->registrar() -> enviarEmail();


  //$usuario4 = new Usuario();
  //$usuario4 ->setNombre("Alejandro"); 
  //echo "<br />". $usuario4 ->getNombre();

  //$usuario5 = new Usuario("Mateo","Ortiz");


  //echo $usuario5 -> getNombreCompleto();




  //$deportivo1 = new Deportivo();
  //$deportivo1->setModelo("lamborghini");
  //$deportivo1 -> levantarCapota();

/*
  $toyota1 = new Toyota();
  $toyota1 -> setContenidoTanque(10);

  echo "Con el tanque lleno el Toyota recorre  : ".$toyota1 -> calcNumKilomConTanqueLleno().".";

  echo "<br  />El color del toyota es ".$toyota1 -> getColor().".";

*/

$carro1 = new Minicar ();
$carro1 -> setModel ("Modelo AX");
echo "Modelo: ".$carro1->getModel();
echo "<br />";
echo "Pitando: ". $carro1 ->pitar();
echo "<br />";
$carro1 -> setTieneLlantas(true);
echo "<br />";
echo "Tiene llantas? ".$carro1 -> getTieneLlantas();
echo "<br />";




  ?>
</body>

</html>