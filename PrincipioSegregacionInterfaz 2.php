<?php
interface IAve2 {
    public function comer();
    public function nadar();
}

class Pinguino implements IAve2{
    //@override
     public function comer(){
        echo "<p>El ave come</p>";
     }
     public function nadar(){
        echo "<p>El ave nada</p>";
         
    }
 }
