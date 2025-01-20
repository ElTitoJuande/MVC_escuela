<?php
        require_once('../modelo/class.alumno.php');
        require_once('../modelo/class.asignatura.php');
        
        function listarModulo(){
                $asignatura=new asignatura();
                $datoAsig = $asignatura -> obtenerModulo();
                require_once('../vista/inicio.php');

        }

        if(isset($_REQUEST['action'])){

        }else{
                listarModulo();
        }

?>