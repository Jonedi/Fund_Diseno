<?php
interface Conexion {
    public function getDatos();
    public function setDatos();
}

class DatabaseService implements Conexion {
    public function getDatos() {}
    public function setDatos() {}
}

class APIService implements Conexion {
    public function getDatos() {}
    public function setDatos() {}
}

class AccesoDatos {
    private $conexion;

    public function AccesoDatos($conexion) {
        this->Conexion;
    }

    private function getDatos() {
        $conexion->getDatos();
    }
}