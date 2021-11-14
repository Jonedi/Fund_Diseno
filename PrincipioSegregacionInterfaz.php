<?php
interface IAve {
    public function comer();
    public function volar();
}

class Loro implements IAve {
   //@override
    public function volar(){
        echo "<p>El ave vuela</p>";
    }
    public function comer(){
        echo "<p>El ave come</p>";
    }
    
}
class Tucan implements IAve {
   //@override
   public function volar(){  
    echo "<p>El ave vuela</p>";
   } 
   public function comer(){
    echo "<p>El ave come</p>";

   }
}

