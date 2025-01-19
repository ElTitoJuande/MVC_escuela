<?php
    require_once('class.db.php');

    class alu_asig{

        public $conn;
        public $nota;
        public $id_alum;
        public $id_asig;
    
        public function __construct(String $nombre = "", String $dni =""){
            $this -> conn = new db();
            $this-> nombre = $nombre;
            $this-> dni = $dni;
        }
    
        public function obtenerAlumnos(){
            $consulta = "SELECT * FROM alumnos";
            $sentencia = $this->conn->getConn()->prepare($consulta);
            $sentencia = execute();
            $sentencia = bind_result($this->dni, $this->nombre);
    
            $alumnos = array();
    
            while($sentencia->fetch()){
                $alumno = array(
                    "nombre"=> $this->nombre,
                    "dni" => $this->dni
                );
                $alumnos[] = $alumno;
            }
            return $alumnos;
        }
    
    }

?>