
<?php
class Coche {  
    $marca;

    function Coche(marca){ $this->marca = marca; }

    function getMarcaCoche(){ return marca; }
}

class CocheDB{  
    function guardarCocheDB(Coche ){ ... }
    function eliminarCocheDB(Coche ){ ... }
} 



?>