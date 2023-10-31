<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>REGISTRO DENUNCIA</title>
</head>
<body>
    <form method="post">
        <h1>REGISTRA DENUNCIA</h1>
        <input type="int" name="numero" placeholder="Numero de identificacion">
        <input type="text" name="name" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="int" name="numeroCelular" placeholder="Numero de celular">
        <input type="text" name="descripcion" placeholder="Descripción denuncia">
        <input type="submit">
    </form>
    <?php
        include("Proyecto.php");
    ?>
</body>
</html>