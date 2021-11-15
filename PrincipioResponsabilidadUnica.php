
<?php
class Coche {  
    public $marca;

    public function __construct($marca){ $this->marca = marca; }

    function getMarcaCoche(){ return marca; }
}

class CocheDB{  
    public function guardarCocheDB(Coche){ ... }
    public function eliminarCocheDB(Coche){ ... }
} 



?>