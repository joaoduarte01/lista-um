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
        <input type="submit" value="Verificar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero % 2 == 0) {
            echo "<p>$numero é Par.</p>";
        } else {
            echo "<p>$numero é Ímpar.</p>";
        }
    }
    ?>
</body>
</html>