<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="inimmo.css">
    <link rel="shortcut icon" href="imagenes/inimmo2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inimmo</title>
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
    <header >
        
        <div class="logo">
           
            <img src="imagenes/logo.jpg" width="150px" height="95px" alt="">
        </div> 
        <div class="MONTHS">
        <div class="titulo">
            <h3>JANUARY</h3>
        </div>
        <div class="titulo2">
            <h3>FEBRUARY</h3>
        </div>
        <div class="titulo3">
            <h3>MARCH</h3>
        </div>
        <div class="titulo4">
            <h3>APRIL</h3>
        </div>
        <div class="titulo5">
            <h3>MAY</h3>
        </div>
        <div class="titulo6">
            <h3>JUNE</h3>
        </div>
        <div class="titulo7">
            <h3>JULY</h3>
        </div>
        <div class="titulo8">
            <h3>AUGUST</h3>
        </div>
        <div class="titulo9">
            <h3>SEPTEMBER</h3>
        </div>
        <div class="titulo10">
            <a href="OCTOBER.php"><img src="imagenes/october-2023-calendar-classic.png" alt=""></a>
        </div>
        <div class="titulo11">
            <a href="NOVEMBER.php"><img src="imagenes/november-2023-calendar-classic.png" alt=""></a>
        </div>
        <div class="titulo12">
            <h3>DECEMBER</h3>
        </div>
    </div>
    </header>
  
</body>
</html>