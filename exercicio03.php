<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero > 0) {
            echo "<p>O número $numero é Positivo.</p>";
        } elseif ($numero < 0) {
            echo "<p>O número $numero é Negativo.</p>";
        } else {
            echo "<p>O número é Zero.</p>";
        }
    }
    ?>

</body>
</html>
