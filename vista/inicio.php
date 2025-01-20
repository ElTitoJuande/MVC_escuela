<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela - Inicio</title>
</head>
<body>
    <form action="../controlador/index.php">
        <?php
        if(isset($datoAsig)){
            foreach ($datoAsig['modulos'] as $value) {
                echo "<input type='radio' value='$value'> $value";
                echo "<button>Enviar</button>";
            }
        }else{
            echo "<p>No hay datos de módulos</p>";
        };
        ?>
    </form>
</body>
</html>