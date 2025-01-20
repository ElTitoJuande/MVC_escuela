<?php
    require_once('class.db.php');

class asignatura{

    public $conn;
    private $id;
    private $nombre;
    private $modulo;
    private $curso;

    public function __construct(){
        $this->conn = new db();
        $this->id = "";
        $this->nombre = "";
        $this->modulo = "";
        $this->curso = "";
    }

    public function obtenerAsignaturas(){
        $consulta = "SELECT * FROM asignatura";
        $sentencia = $this->conn->getConn()->prepare($consulta);
        $sentencia->bind_result($this->id,$this->nombre, $this->modulo, $this->curso);
        $sentencia->execute();

        $asignaturas = array();
        while($sentencia ->fetch()){
            $asignatura = array(
                "id"=>$this->id,
                "nombre"=>$this ->nombre,
                "modulo"=>$this->modulo,
                "curso"=>$this->curso
            );
            $asignaturas[] = $asignatura;
            
        }
        return $asignaturas;
    }

    public function obtenerModulo(){
        $consulta = "SELECT DISTINCT modulo FROM asignatura ";
        $sentencia = $this->conn->getConn()->prepare($consulta);
        $sentencia->bind_result($this->modulo);
        $sentencia->execute();
        
        $modulos = [];

        while($sentencia ->fetch()){
            $modulos[] = $this -> modulo;
        }
        $sentencia -> close();
        
        $consulta = "SELECT DISTINCT curso FROM asignatura ";
        $sentencia = $this->conn->getConn()->prepare($consulta);
        $sentencia->bind_result($this->curso);
        $sentencia->execute();
        
        $cursos = [];
        
        while($sentencia ->fetch()){
            $cursos[] = $this -> curso;
        }
        $sentencia -> close();  

        $lista=[
            'modulos'=>$modulos,
            'cursos'=>$cursos,
        ];
        return $lista;
        }
    }


?>