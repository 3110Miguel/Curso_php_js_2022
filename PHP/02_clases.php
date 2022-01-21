<?php

// $variable = 'xxx'
class Vehiculo{
    public $numero_de_llantas;
    private $kilometraje;

    //Está funcion se manda a llamar cuando instanciamos un objeto
    public function _construct(){

    }

    public function getKilometraje(){
        return $this->kilometraje;

    }

    private function inicializarKilometraje(){
        $this->kilometraje = 0;  //Se hace uso de la variable de mi clase

    }

    protected function setKilometraje($km){

    }

   
}

$auto = new Vehiculo(); // Insitanciar clase
$auto->numero_de_llantas = 4;
echo 'Numero de llantas: ' .$auto->numero_de_llantas;
echo '<br/>';
echo 'El kilometraje es: ' .$auto->getKilometraje()

/**
 * Creo mi clase de auto que hereda de vehiculo
 */
class Auto extends Vehiculo{
    public $marca = 'N/A';
    public $anio = 'N/A';
    public $color = 'N/A';

    function setPropiedas($marcaRe='N/A',$colorRe, $anioRe='2002'){
        $this->marca = $marcaRE;
        $this->anio = $anioRE;
        $this->color = $colorRE;
    }

    

}

?>