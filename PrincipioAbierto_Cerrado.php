<?php
class Coche {
    public $marca; 
    function Coche($marca) {
        $this->marca = $marca;
    }
    function getMarcaCoche(){

        return $this->marca;
    }
};

function main($arrayCoche){
    $arrayCoche = array(
        new Coche ("Renault"),
        new Coche ("Audi")
    );
    imprimirPrecioMedioCoche($arrayCoche);
}
$arrayCoche = array(
    new Coche ("Renault"),
    new Coche ("Audi"),
    new Coche ("Mercedes")
);
function imprimirPrecioMedioCoche($Coche){
    foreach ($Coche as $arrayCoche){
        if ($Coche->marca("Renault")) {
           print(18000);
        };
        if ($Coche->marca("Audi")) {
            print(25000);
        };
        if ($Coche->marca("Mercedes")) {
            print(27000);
        };
    }   
};
?>

