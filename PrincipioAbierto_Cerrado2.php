<?php
abstract class Coche {
    abstract public function PrecioMedioCoche();
};
class Renault extends Coche{
    function PrecioMedioCoche(){
        return 18000;
    }
}
class Audi extends Coche{
    function PrecioMedioCoche(){
        return 25000;
    }
}
class Mercedes extends Coche{
    function PrecioMedioCoche(){
        return 27000;
    }
};
function main(){
    $arrayCoche = array(
        new Renault,
        new Audi,
        new Mercedes
    );
};
