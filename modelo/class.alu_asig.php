<?php
    require_once('class.db.php');

    class alu_asig{

        private $conn;
        private $nota;
        private $id_alum;
        private $id_asig;
    
        public function __construct(float $nota = "",int $id_alum = "", int $id_asig = ""){
            $this -> conn = new db();
            $this-> nota = $nota;
            $this-> id_alum = $id_alum;
            $this-> id_asig = $id_asig;
        }
    
        public function obtenerDatos($idAlumno){
            
        }
    
    }

?>