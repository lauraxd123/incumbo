<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="october.css">
    <link rel="shortcut icon" href="imagenes/inimmo2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>October List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /><!-- <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Roboto+Slab:wght@300&family=Sen&family=Staatliches&display=swap" rel="stylesheet"> -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
         <a href="acount.php"><img src="imagenes/usuario.png" alt=""></a>   
         <a href="OCTOBER.php"><img src="imagenes/comprobacion-de-lista.png" alt=""></a>   
         <a href="music.php"><img src="imagenes\album-de-musica.png" alt="" width="55px" height="55px"></a>   
         
        </div> 
    <header >
        
        <h1>Daily Planner</h1>

    <div>
    <span class="material-symbols-outlined happy">
sentiment_satisfied
</span>

<span class="material-symbols-outlined sad">
sentiment_dissatisfied
</span>

<span class="material-symbols-outlined angry">
sentiment_extremely_dissatisfied
</span>

<span class="material-symbols-outlined sick">
sick
</span>

    </div>

    <script src="emociones.js"></script>
    <script>
function addTask(id) {
  var taskList = document.getElementById(id);
  var newTask = document.createElement("div");
  newTask.innerHTML = '<input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input">';
  taskList.appendChild(newTask);
}

// function handleKeyPress(event) {
//   if (event.key === "Enter") { addTask();
//  }
// }
</script>
    
    <div class="horas">
        <div class="titulo" id="titulo">
            <h3>5:00</h3>
            <input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input">
            <button onclick="addTask('titulo')">Agregar tarea</button>
        </div>
        <div class="titulo2" id="titulo2">
            <h3>6:00</h3>
            <input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input">
            <button onclick="addTask('titulo2')">Agregar tarea</button>
        </div>
        <div class="titulo3" id="titulo3">
            <h3>7:00</h3>
            <input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input">
            <button onclick="addTask('titulo3')">Agregar tarea</button>
        </div>
        <div class="titulo4" id="titulo4">
            <h3>8:00</h3>
            <input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input">
            <button onclick="addTask('titulo4')">Agregar tarea</button>
        </div>
        <div class="titulo5" id="titulo5">
            <h3>9:00</h3>
            <input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input">
            <button onclick="addTask('titulo5')">Agregar tarea</button>
        </div>
        <div class="titulo6" id="titulo6">
            <h3>10:00</h3>
            <input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input">
            <button onclick="addTask('titulo6')">Agregar tarea</button>
        </div>
        <div class="titulo7" id="titulo7">
            <h3>11:00</h3>
            <input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input">
            <button onclick="addTask('titulo7')">Agregar tarea</button>
        </div>
        <div class="titulo8" id="titulo8">
            <h3>12:00</h3>
            <input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input">
            <button onclick="addTask('titulo8')">Agregar tarea</button>
        </div>
    </div>

    <div id="task-list">
     <div>

    <!-- <input type="checkbox" class="task-checkbox" onkeypress="handleKeyPress(event)"> <input type="text" class="task-input"> -->
  </div>
</div>
<!-- <button onclick="addTask()">Agregar tarea</button> -->
<div class="afirmacion">
    <a href="afirmations.php"><img src="imagenes\Your affirmation for today! _3.jpg" alt=""></a>
</div>

<div class="carrusel"></div>
    </header>


</body>