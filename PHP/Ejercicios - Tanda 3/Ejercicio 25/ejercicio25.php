<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
<body>
    <form action="ejercicio25.php" method="post">
    Escriba un número: <input type="text" name="val">
    <input type="submit" value="Calcular"><br>
    

    <?php    
        if (isset($_POST['val'])) {
            $n = $_POST['val'];
        
           echo strrev($n);
        }
            ?>
    </form>
</body>
</html>