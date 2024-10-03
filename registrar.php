<?php 

include("con_bd.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['correo']) >= 1 && strlen($_POST['contraseña']) >= 1) {
        $correo = trim($_POST['correo']);
        $contraseña = trim($_POST['contraseña']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO login(correo, contraseña, fecha) VALUES ('$correo','$contraseña','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?> 
            <h3 class="ok">¡Te has inscripto correctamente!</h3>
            <?php
            // Redirigir al usuario a la página http://localhost/prestashop/
            header('Location: http://localhost/prestashop/');
            exit; 
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    }   else {
            ?> 
            <h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
    }
}

?>

