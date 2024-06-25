<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form method="post" class="formulario" action="">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="address">Endereço:</label>
        <input type="text" id="address" name="address" required><br><br>
        <label for="city">Cidade:</label>
        <input type="text" id="city" name="city" required><br><br>
        <input type="submit" class="botao" value="Salvar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost"; // ou o endereço do seu servidor
        $username = "root"; // usuário do banco de dados
        $password = "usbw"; // senha do banco de dados
        $dbname = "cadastusuario"; // nome do banco de dados

        // Cria conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica conexão
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Recebe dados do formulário e converte para minúsculas
        $name = strtolower($_POST["name"]);
        $address = strtolower($_POST["address"]);
        $city = strtolower($_POST["city"]);

        // Previne injeção de SQL
        $name = $conn->real_escape_string($name);
        $address = $conn->real_escape_string($address);
        $city = $conn->real_escape_string($city);

        // Insere dados na tabela
        $sql = "INSERT INTO users (name, address, city) VALUES ('$name', '$address', '$city')";

        if ($conn->query($sql) === TRUE) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        // Fecha a conexão
        $conn->close();
    }
    ?>
</body>
</html>
