<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Compensar</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="POST">
        <h1>Compensar</h1>
        <input type="text" name="name" placeholder="Usuario">
        <input type="text" name="email" placeholder="Email">
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php 
        include("registrar.php");
        ?>
</body>
</html>