<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Substituir Palavra</title>
</head>
<body>
    <h1>Substituir Palavra</h1>
    <form method="post" class="formulario" action="">
        <label for="phrase">Frase:</label>
        <input type="text" id="phrase" name="phrase" required><br><br>
        <label for="search">Palavra a ser substituída:</label>
        <input type="text" id="search" name="search" required><br><br>
        <label for="replace">Palavra substituta:</label>
        <input type="text" id="replace" name="replace" required><br><br>
        <input type="submit" class="botao" value="Substituir">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phrase = trim($_POST["phrase"]);
        $search = trim($_POST["search"]);
        $replace = trim($_POST["replace"]);

        $new_phrase = str_replace($search, $replace, $phrase);

        echo "<p>Frase original: " . htmlspecialchars($phrase) . "</p>";
        echo "<p>Nova frase: " . htmlspecialchars($new_phrase) . "</p>";
    }
    ?>
</body>
</html>


