<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="imagenes/inimmo2.jpg" type="image/x-icon">
    <link rel="stylesheet" href="acount.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="acount.php" method="POST">
            <label for="user">Username:
            </label>
            <input 
            type="text"
            placeholder="Enter username"
            id="user"
            autocomplete="off"
            required
            name="userName"
            >
            <label for="pass">Password:</label>
            <input
             type="Password"
             id="pass"
             placeholder="Enter Password"
             required
             name="password"
             >
             <input type="submit" value="Log in" name="login">
        </form>
        <a href="">Forgot your password?</a>
        <a href="registrar.php">Don't have an account</a>

<?php
        if(isset($_POST["login"])){
                // include("bbdd_connection.php");
                // $usuario = $_POST["userName"];
                // $pass = $_POST["password"];

                // $busqueda = mysqli_query($connection, "SELECT Username, `Password` FROM $bbddTable WHERE Username = '$usuario'");
                // $existe = false;
                // $datosMal = true;

                // while($registro = mysqli_fetch_array($busqueda)){
                //     if($registro["Username"] == $usuario){
                //         $existe = true;
                //     }

                //     if($existe){
                //         if($registro["Password"] == $pass){
                //             $datosMal = false;
                //         }
                //     }
                // }

                // if(!$existe){
                //     ?>
                //         <p class="mensaje">El usuario no existe en la base de datos</p>
                //     <?php
                // }else if($existe && $datosMal){
                //     ?>
                //         <p class="mensaje">La contraseña no corresponde a la cuenta a la que quiere acceder</p>
                //     <?php
                // }else{
                //     session_start();
                //     $_SESSION["sesionIniciada"] = 1;
                //     $_SESSION["usuario"]= $usuario;
                    header("location:inimmo.php");                    
                // }
            }
            ?>

    </div>
</body>
</html>