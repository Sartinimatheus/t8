<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        input { padding: 5px; margin: 5px; }
    </style>
</head>
<body>
    <h2>Digite seu nome:</h2>
    <form method="post">
        <input type="text" name="nome" placeholder="Seu nome">
        <input type="submit" value="Salvar">
    </form>

    <?php
    if (isset($_POST['nome'])) {
        //Código aqui (criar cookie)
        $nome = $_POST['nome'];
        setcookie("churros", $nome, time() + 30);
        echo "<p>Valor salvo no cookie: <b>$nome</b></p>";

    }

    if (isset($_COOKIE['nome'])) {
        //Código aqui (mostrar cookie)
        echo "<p>Olá de novo, <b>" . $_COOKIE['pepino'] . "</b>!</p>";
    }
    ?>
</body>
</html>
