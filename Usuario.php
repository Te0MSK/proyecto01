<?php


class Usuario
{

    //Cuando declaramos la propiedas $nombre como privada al momento de compilar nos aparece el siguiente error:
    //Fatal error: Uncaught Error: Cannot access private property Usuario::$nombre in
    //C:\xampp\htdocs\proyecto01\index.php:83 Stack trace: #0 {main} thrown in C:\xampp\htdocs\proyecto01\index.php on line 83
    //creamos un metodo llamado setNombre en el usuario.php para poder ser llamado en el index 



    //17. al crear el constructor tenemos que declarar el nombre del usuario al momento de la instancia 


    private $nombre;
    public $apellido;


    public function __construct($nom, $apell)
    {
        $this->nombre = $nom;
        $this->apellido = $apell;
    }


    public function getNombreCompleto()
    {

        return "<br />El nombre completo del usuario es:". $this ->nombre."  ". $this ->apellido;

    }
    public function saludar()
    {


        echo "<br /> Coordial saludo: <br /> " . $this->nombre . " " .  $this->apellido;
    }

    public function registrar()
    {


        echo "<br /> Usuario: <br /> " . $this->nombre . " " .  $this->apellido . "  " . "REGISTRADO" . "  ";


        return $this;
    }

    public function enviarEmail()
    {

        echo "Email enviado";
    }
    public function setNombre($nom)
    {


        $this->nombre = $nom;
    }

    public function getNombre()
    {

        return "El nombre del Usuario es " . $this->nombre;
    }
}
