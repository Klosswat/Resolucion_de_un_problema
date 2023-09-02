<!DOCTYPE html>
<html>
<head>
<title>Calculadora de Hipotenusa</title>
</head>
<body>
<h2>Calculadora de Hipotenusa</h2>
<form method="post" action="">
<label for="catetoA">Cateto A:</label>
<input type="number" step="any" name="catetoA" required><br>

<label for="catetoB">Cateto B:</label>
<input type="number" step="any" name="catetoB" required><br>

<input type="submit" value="Calcular">
</form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $catetoA = $_POST["catetoA"];
        $catetoB = $_POST["catetoB"];
        $hipotenusa = sqrt($catetoA ** 2 + $catetoB ** 2);
        echo "<h3>Resultado:</h3>";
        echo "Cateto A: $catetoA<br>";
        echo "Cateto B: $catetoB<br>";
        echo "Hipotenusa: $hipotenusa";
    }
    ?>
</body>
</html>