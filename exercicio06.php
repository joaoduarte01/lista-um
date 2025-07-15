<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Divisores de um Número</title>
</head>
<body>

    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Mostrar Divisores">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<h3>Divisores de $numero:</h3>";

        for($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                echo "$i<br>";
            }
        }
    }
    ?>

</body>
</html>
