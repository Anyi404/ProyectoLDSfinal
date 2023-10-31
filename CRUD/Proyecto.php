<?php
        include ("conexion.php");
if (isset($_POST['enviar'])){
    if(strlen($_POST['numero']) >=1 && 
    strlen($_POST['name'])>=1 && 
    strlen($_POST['apellido'])>=1 && 
    strlen($_POST['numeroCelular'])>=1 && 
    strlen($_POST['descripcio'])>=1)  
    $numero = trim($_POST['numero']);
    $name = trim($_POST['name']);
    $apellido = trim($_POST['apellido']);
    $numeroCelular = trim($_POST['numeroCelular']);
    $descripcion = trim($_POST['descripcion']);
    $consulta = "INSERT INTO registro_usuario(numero_identificacion,nombre,apellido,numero_celular,Descripcion_denuncia) 
    values ('$numero','$name','$apellido','$numeroCelular','$descripcion') ";
    $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
                ?>
                <h3 class ="ok">¡Te has inscrito correctamente!</h3>
                <?php
        }else {
                ?>
                <h3 class ="bad">¡Ups ha ocurrido un error!</h3>
                <?php
        }
    }else{
        ?>
        <h3 class ="bad">¡Por favor complete los campos!</h3>
        <?php

}
?>