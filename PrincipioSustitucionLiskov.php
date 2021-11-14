<?php
abstract class Coche {
    public $coche;
    public function __construct($coche) {
        $this->coche = $coche;
    }
    abstract public function numAsientos() : int;
}

class Renault extends Coche {
    public function numAsientos() : int {
        return 5;
    }
}

class Audi extends Coche {
    public function numAsientos() : int {
        return 4;
    }
}

class Mercedes extends Coche {
    public function numAsientos() : int {
        return 5;
    }
}

class Ford extends Coche {
    public function numAsientos() : int {
        return 4;
    }
}

$arrayCoches = array(
    new Reanult,
    new Audi,
    new Mercedes,
    new Ford,
);

function imprimirNumAsientos($arrayCoches) {
    foreach ($coche as $arrayCoches) {
        if ($coche instanceOf Renault) {
            print (numAsientosRenault($coche));
        }
        if ($coche instanceOf Audi) {
            print (numAsientosRenault($coche));
        }
        if ($coche instanceOf Mercedes) {
            print (numAsientosRenault($coche));
        }
        if ($coche instanceOf Ford) {
            print (numAsientosRenault($coche));
        }
    }
}

imprimirNumAsientos($arrayCoches);
