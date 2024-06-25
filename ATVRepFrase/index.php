<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Repetir Frase</title>
</head>
<body>
    <h1>Repetir Frase</h1>
    <form method="post" class="formulario" action="">
        <label for="phrase" class="phrase_titulo">Frase:</label>
        <input type="text" id="phrase" name="phrase" required><br><br>
        <label for="times" class="vezes">Quantidade de vezes:</label>
        <input type="number" id="times" name="times" required><br><br>
        <input type="submit" class="botao" value="Repetir">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phrase = $_POST["phrase"];
        $times = intval($_POST["times"]);
        if ($times > 0) {
            echo "<p>" . str_repeat(htmlspecialchars($phrase) . " ", $times) . "</p>";
        } else {
            echo "<p>Quantidade de vezes deve ser maior que zero.</p>";
        }
    }
    ?>
</body>
</html>
