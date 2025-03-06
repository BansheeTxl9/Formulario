<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App móvil registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<form method="post" autocomplete="off">
<img src="logo m3.webp" alt="">
    <h2>Formulario de Moisés</h2>
    
    <div class="input-group">

    <div class="input-container">
        <input type="text" name="name" placeholder="Nombre/Apellidos:">
        <i class="fa-solid fa-user"></i>
    </div>

    <div class="input-container">
        <input type="age" name="age" placeholder="Edad:">
        <i class="fa-solid fa-birthday-cake"></i>
    </div>

    <div class="input-container">
        <input type="course" name="course" placeholder="Curso:">
        <i class="fa-solid fa-list-ol"></i>
    </div>

    <div class="input-container">
        <input type="direction" name="direction" placeholder="Dirección:">
        <i class="fa-solid fa-map-marker"></i>
    </div>

    <div class="input-container">
        <input type="email" name="email" placeholder="Email">
        <i class="fa-solid fa-envelope"></i>
    </div>

    <div class="input-container">
        <input type="birthday" name="birthday" placeholder="Fecha de nacimiento">
        <i class="fa-solid fa-child"></i>
    </div>
 
    <input type="submit" name="send" class="btn" value="Enviar">
    </div>
    
</form>

<?php
include("send.php");
?>



</body>
</html>