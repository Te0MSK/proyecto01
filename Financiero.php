<?php
class Financiero extends Administrador{

   

    public function definirArea()
    {
        return "Area financiera".$this->salario;
    }
}
