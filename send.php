<?php
include("conexion.php");

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {

    // Validar si todos los campos están completos
    if (
        !empty($_POST['name']) &&
        !empty($_POST['age']) &&
        !empty($_POST['course']) &&
        !empty($_POST['direction']) &&
        !empty($_POST['email']) &&
        !empty($_POST['birthday'])
    ) {
        // Recoger los valores del formulario
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);
        $course = trim($_POST['course']);
        $direction = trim($_POST['direction']);
        $email = trim($_POST['email']);
        $birthday = trim($_POST['birthday']);

        // Realizar la consulta de inserción
        $consulta = "INSERT INTO datos (Nombre_Apellidos, Edad, Curso, Dirección, Email, Fecha_nacimiento)
                    VALUES ('$name', '$age', '$course', '$direction', '$email', '$birthday')";

        // Ejecutar la consulta
        $resultado = mysqli_query($conex, $consulta);

        // Verificar si la consulta fue exitosa
        if ($resultado) {
            // Si la consulta fue exitosa, mostrar el mensaje de éxito
            echo '<h3 class="success"></h3>';
        } else {
            // Si hay un error en la consulta, mostrar el error
            echo '<h3 class="error">¡Ups, algo salió mal! Error: ' . mysqli_error($conex) . '</h3>';
        }
    } else {
        // Si hay campos vacíos, mostrar el mensaje de error
        echo '<h3 class="error">Completa todos los campos</h3>';
    }
}
?>