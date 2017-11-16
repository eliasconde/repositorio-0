<html>
    <body>
     
     <?php 
        if (filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL)==false) {
            echo 'La dirección de mail no es correcta';
        } else {
            echo 'Dirección de mail correcta';
        }
        
        echo "<br>";
        echo "<br>";
        
        if (empty($_POST["genero"])){
            echo 'Debe seleccionar genero';
        } else {
            echo 'Selecciono un genero correctamente';
        }
        
     
     ?>   
    
    </body>
</html>