<?php
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once dirname(__FILE__,3).'/php/config/header.php';
    ?>
    <title>Recover Records</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/menu.php';
    ?>
   <div class="container-md">
        <?php
            $saltolinea = "\n";
            $fichero = fopen("../datos.txt","a") or die ("Problema en la Creación"); ///abrir fichero
            fputs($fichero, $_POST['nombre'].$saltolinea); //escribir en el fichero
            fputs($fichero, $_POST['apellido'].$saltolinea); //escribir 
            fputs($fichero, $_POST['telefono'].$saltolinea); //escribir 
            fputs($fichero, $_POST['cedula'].$saltolinea); //escribir 
            fputs($fichero, "-------------------------".$saltolinea);
            fclose($fichero); //cerrar fichero
            echo "¡Datos guardados correctamente!";
        ?>
   </div>
</body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/footer.php';
    ?>

</html>