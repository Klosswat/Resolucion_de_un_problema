<!DOCTYPE html>
<html>
<head>
    <title>Menú </title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #640BA1;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: #eee;
        }
        nav li {
            display: inline-block;
            margin: 0;
        }
        nav a {
            display: block;
            padding: 77px 77px;
            text-decoration: none;
            color: #640BA1;
        }
        nav a:hover {
            background-color: #ccc;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Base de Datos - Evidencia de Aprendizaje
        Alvarez Jauregui Cristian Daniel 2116970 5L1</h1>
    </header>
    <nav>
        <ul>
            <?php
            $menuItems = array(
                "Calculadora de edad" => "Calculadora_de_edad.php",
                "Calculadora de hipotenusa" => "Calculadora_de_hipotenusa.php",
            
            );

            foreach ($menuItems as $itemName => $itemURL) {
                echo "<li><a href=\"$itemURL\">$itemName</a></li>";
            }
            ?>
        </ul>
    </nav>
</body>
</html>