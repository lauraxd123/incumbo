<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="music.css">
    <link rel="shortcut icon" href="imagenes/inimmo2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
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
         <a href="inimmo.php"><img src="imagenes/hogar.png" alt=""></a>   
         <a href="profile.php"><img src="imagenes/usuario.png" alt=""></a>   
         <a href="OCTOBER.php"><img src="imagenes/comprobacion-de-lista.png" alt=""></a>   
         <a href="music.php"><img src="imagenes\album-de-musica.png" alt="" width="55px" height="55px"></a>   
    </div>

        
     <header >
        
        <div class="logo">
           
            <img src="imagenes/logo.jpg" width="150px" height="95px" alt="">
        </div> 

     </header>

        <div class="playlist1">
        <iframe src="https://open.spotify.com/embed?uri=spotify:playlist:5wPS697Wus1K3QrDYbllm1" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="playlist2">
        <iframe src="https://open.spotify.com/embed?uri=spotify:playlist:37i9dQZEVXbNG2KDcFcKOF" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="playlist3">
        <iframe src="https://open.spotify.com/embed?uri=spotify:playlist:5NzHPp3paFbMZuKxf1uqkR" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        

   </div>
</body>
</html>
