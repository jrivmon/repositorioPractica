<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de Juan José Rivera Montes</title>
</head>
<body>
    <h1>Juan José Rivera Montes</h1>
    
    <div id="relojCliente"></div>
    
    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="1" required>
        <br>
        <input type="submit" value="enviar">
        
    </form>
    <script src="js/reloj.js"></script>
    <?php
        date_default_timezone_set('Europe/Madrid');
        echo date('H:i:s');
    ?>
</body>
</html>