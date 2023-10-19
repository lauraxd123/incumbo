<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="profile.css">
    <link rel="shortcut icon" href="imagenes/inimmo2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inimmo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <!-- <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Roboto+Slab:wght@300&family=Sen&family=Staatliches&display=swap" rel="stylesheet"> -->
</head>
<body>
<?php
    session_start();
    ob_start();
     $_SESSION["usuario"];
     $usuario= $_SESSION["usuario"];

    if($_SESSION["usuario"]==""){
        header("location:acount.php");
    }
    include("bbdd_connection.php");
    $busqueda = mysqli_query($connection, "SELECT * FROM $bbddTable WHERE Username = '$usuario'");
             $nombre="";
             $userName="";
             $correo="";

                while($registro = mysqli_fetch_array($busqueda)){
                    $nombre = $registro["Name"];
                    $userName = $registro["Username"];
                    $correo= $registro["Email"];                        
                }
?>
    <div class="botones">
        <a href="inimmo.php"><img src="imagenes/hogar.png" alt=""></a>   
        <a href="acount.php"><img src="imagenes/usuario.png" alt=""></a>   
        <a href="OCTOBER.php"><img src="imagenes/comprobacion-de-lista.png" alt=""></a>   
        <a href="music.php"><img src="imagenes\album-de-musica.png" alt="" width="55px" height="55px"></a>  
    </div>

    <div class="infoperfil">
        <div class="cerrarsesion">
            <a href="cerrarSesion.php">Sign out</a>
        </div>

     
        <div class= "fotodeperfil">
            <img src="imagenes\profile.jpg" width="250px" height="250px" alt="">
        </div>

        <div class= "usuario">
            <h1><?php echo $nombre?></h1>
            <p><?php echo $userName?> <br> <br>
            <?php echo $correo?></p>
        </div>

        <div class= "edit">
            <a href="editprofile.php">
                <button>Edit Profile</button>
            </a> 
        </div>
    
            <h2>PERFORMANCE</h2>
    
        <div class="progreso">
        
            <label for="file">JANUARY:</label>
            <progress id="file" max="100" value="70"> 70% </progress>

            <label for="file">FEBRUARY:</label>
            <progress id="file" max="100" value="50"> 50% </progress>

            <label for="file">MARCH:</label>
            <progress id="file" max="100" value="60"> 60% </progress>

            <label for="file">APRIL:</label>
            <progress id="file" max="100" value="30"> 30% </progress>

            <label for="file">MAY:</label>
            <progress id="file" max="100" value="15"> 15% </progress>

            <label for="file">JUNE:</label>
            <progress id="file" max="100" value="47"> 47% </progress>

            <label for="file">JULY:</label>
            <progress id="file" max="100" value="58"> 58% </progress>

            <label for="file">AUGUST:</label>
            <progress id="file" max="100" value="81"> 81% </progress>

            <label for="file">SEPTEMBER:</label>
            <progress id="file" max="100" value="8"> 8% </progress>

            <label for="file">OCTOBER:</label>
            <progress id="file" max="100" value="67"> 67% </progress>

            <label for="file">NOVEMBER:</label>
            <progress id="file" max="100" value="20"> 20% </progress>

            <label for="file">DECEMBER:</label>
            <progress id="file" max="100" value="90"> 90% </progress>
        </div>
    </div>


</body>
</html>