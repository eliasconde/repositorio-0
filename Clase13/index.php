<html>
    
    <body>
        
        <form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
            
            Nombre: <input type="text" name='nombre'> <span style="color: red;" class='error'> * </span> <br><br>
            
            Mail: <input type="text" name='mail'> <span style="color: red;" class='error'> * </span> <br><br>
            
            Genero:  <span style="color: red;" class='error'> * </span> <br>
            
            <input type="radio" name="genero" value='femenino'>Femenino <br>
            <input type="radio" name='genero' value="masculino">Masculino <br><br>
            
            <input type="submit" name='boton' value='Ingresar'>           
        </form>
        
        
        
    </body>
    
</html>