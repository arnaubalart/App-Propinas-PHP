<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App propinas</title>
</head>
<body>
    <h1>Calculador de propinas</h1><br>
    <form action="processes/calculo.proc.php" method="post">
        <label for="total">Total de la cuenta</label><br>
        <input type="number" name="total" id="total" step="any" ><br><br>
        <label for="calidad">¿Que tal el servicio?</label><br>
        <select name="calidad" id="calidad" >
            <option value="30">30% Excelente</option>
            <option value="20">20% Bueno</option>
            <option value="10" selected>10% Normal</option>
            <option value="5">5% Mala</option>
        </select><br><br>
    <label for="personas">¿Cuantas personas van a pagar?</label><br>
    <input type="number" name="personas" id="personas" ><br><br>
    <input type="submit" name="enviar" value="Calcular">
    </form><br><br><br>
    <?php
    session_start();
        if(isset($_SESSION['resultado'])){
            echo "<h1>".$_SESSION['resultado']."</h1>";
        }

    ?>

</body>
</html>