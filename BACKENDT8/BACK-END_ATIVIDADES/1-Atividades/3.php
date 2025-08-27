<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
    <style>
        body { font-family: Arial; margin: 20px; }
    </style>
</head>
<body>
    <h2>Verifique se você é maior de idade</h2>
    <form method="post">
        <input type="number" name="idade" placeholder="Sua idade">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if (isset($_POST['idade'])) {
    $n = $_POST['idade'];
        if ($n % 2 == 0) {
            echo "<p>O número $n é <b>PAR</b>.</p>";
        } else {
            echo "<p>O número $n é <b>ÍMPAR</b>.</p>";
        }
    }
    ?>
</body>
</html>
