<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<h3>Tabuada do $numero:</h3>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
    ?>

</body>
</html>
