<?php
    require_once('class.db.php');

class asignatura{

    public $conn;
    public $id;
    public $nombre;
    public $modulo;
    public $curso;

    public function __construct(String $nombre, String $modulo, int $curso){
        $this->conn = new db();
        $this->nombre = $nombre;
        $this->modulo = $modulo;
        $this->curso = $curso;
    }

    // public function obtenerAsignaturas(){
    //     $consulta = "SELECT * FROM asignaturas";
    //     $sentencia = $this->conn->getConn()->prepare($consulta);
    //     $sentencia = execute();
    //     $sentencia = bind_result($this->nombre, $this->modulo, $this->curso);


    // }
}


?>