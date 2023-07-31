<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registrar.css">
</head>
<body>
<div class="login">
        <h1>Register</h1>
    <form action="registrar.php" method="POST">

        
        <label for="name">Name:</label>  
    
        <input type="text" id="name" name="nameUser"> 
        
        <br> 
        <label for="apellido">Last name:</label>
        
        <input type="text" id="apellido" name="lastnameUser">

        <br> 
        <label for="username">Username:</label>
        
        <input type="text" id="username" name="Username">
        
        <br> 
        <label for="edad">Age: </label>
        
        <input type="number" id="edad" name="ageUser">
        
        <br> 
        <label for="correo">Email:</label>
        
        <input type="email" id="correo" name="emailUser">
        
        <br> 
        
        <label for="fecha"> Birth date: </label>
        
        <input type="date" id="fecha" name="date">
        
        <br>
        
        <label for="pass">Password:</label>

        <input type="password" id="pass" name="password">
        
        <br> 
        
        <label for="masculino">Male</label> 
        
        <input type="radio" id="masculino" name="genero" value="masculino" >
        
        <label for="femenino">Female</label>
        
        <input type="radio" id="femenino" name="genero" value="femenino" checked>
        
    
        <input type="reset" value="Reset">
        
        <input type="submit" value="Register" name="register">
    </form>
    </div>
    <?php
            if(isset($_POST["register"])){
                include("bbdd_connection.php");

                $nombre = $_POST["nameUser"];
                $apellidos = $_POST["lastnameUser"];
                $Nombredeusuario = $_POST["Username"];
                $Edad= $_POST["ageUser"];
                $correo = $_POST["emailUser"];
                $Cumpleaños = $_POST["date"];
                $contraseña = $_POST["password"];
                $genero = $_POST["genero"];
                
                
                $connection->query("INSERT INTO $bbddTable (`Name`,`Last Name`,Username,Age,Email,`Birth Day`,`Password`,Sex)VALUES ('$nombre', '$apellidos','$Nombredeusuario','$Edad','$correo','$Cumpleaños','$contraseña','$genero')");
                ?>

                <p> Se insertó el dato correctamente </p>
                <?php
            }
        ?>



</body>
</html>