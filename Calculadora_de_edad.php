<!DOCTYPE html>
<html>
<head>
<title>Calculadora de Edad</title>
</head>
<body>
<h2>Calculadora de Edad</h2>
<form method="post">
<label for="edad">Ingresa la edad de la persona:</label>
<input type="number" id="edad" name="edad" required>
<button type="submit" name="calcular">Calcular</button>
</form>

<?php
    function calcularEdadEnTiempos($edad) {
        $segundosPorMinuto = 60;
        $minutosPorHora = 60;
        $horasPorDia = 24;
        $diasPorSemana = 7;

        $segundos = $edad * $segundosPorMinuto * $minutosPorHora * $horasPorDia * $diasPorSemana;
        $minutos = $edad * $minutosPorHora * $horasPorDia * $diasPorSemana;
        $horas = $edad * $horasPorDia * $diasPorSemana;
        $dias = $edad * $diasPorSemana;
        $semanas = $edad;

        return array(
            "segundos" => $segundos,
            "minutos" => $minutos,
            "horas" => $horas,
            "dias" => $dias,
            "semanas" => $semanas
        );
    }

    if (isset($_POST['calcular'])) {
        $edad = $_POST['edad'];
        $edadesEnTiempos = calcularEdadEnTiempos($edad);

        echo "<h3>Resultados para una edad de $edad años:</h3>";
        echo "Edad en segundos: " . $edadesEnTiempos['segundos'] . "<br>";
        echo "Edad en minutos: " . $edadesEnTiempos['minutos'] . "<br>";
        echo "Edad en horas: " . $edadesEnTiempos['horas'] . "<br>";
        echo "Edad en días: " . $edadesEnTiempos['dias'] . "<br>";
        echo "Edad en semanas: " . $edadesEnTiempos['semanas'] . "<br>";
    }
    ?>
</body>
</html>