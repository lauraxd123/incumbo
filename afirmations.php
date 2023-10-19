<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="afirmations.css">
    <link rel="shortcut icon" href="imagenes/inimmo2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afirmations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Roboto+Slab:wght@300&family=Sen&family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>

   <?php
     session_start();
     ob_start();
     $_SESSION["usuario"];

     if($_SESSION["usuario"]==""){
        header("location:acount.php");    
     }
    ?>
    <div class="botones">
         <a href=""><img src="imagenes/hogar.png" alt=""></a>   
         <a href="profile.php"><img src="imagenes/usuario.png" alt=""></a>   
         <a href="OCTOBER.php"><img src="imagenes/comprobacion-de-lista.png" alt=""></a>   
         <a href="music.php"><img src="imagenes\album-de-musica.png" alt="" width="55px" height="55px"></a>   
         
    </div>
</body>
<div class="numbers">
    <img src="imagenes\descarga (1).jpg" alt="">
    <img src="imagenes\222 Angel Number Poster _3.jpg" alt="">
    <img src="imagenes\333 Angel Number Poster _3 copy.jpg" alt="">
    <img src="imagenes\444 Angel Number Poster _3.jpg" alt="">
    <img src="imagenes\555 Angel Number Poster _3.jpg" alt="">
    <img src="imagenes\666 Angel Number Poster _3.jpg" alt="">
    <img src="imagenes\777 Angel Number Poster _3.jpg" alt="">
    <img src="imagenes\888 Angel Number Poster _3.jpg" alt="">
    <img src="imagenes\999 Angel Number Poster _3.jpg" alt="">



</div>

</html>
