<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Idade</title>
</head>
<body>
    <form method="POST">
        <label for="ano">Ano de nascimento:</label>
        <input type="number" name="ano" id="ano" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    define("ANO_ATUAL", 2025);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ano = $_POST["ano"];
        $idade = ANO_ATUAL - $ano;
        $dias = $idade * 365;
        $idade_2050 = 2050 - $ano;

        echo "<p>Idade: $idade anos</p>";
        echo "<p>Já viveu aproximadamente $dias dias</p>";
        echo "<p>Em 2050 terá $idade_2050 anos</p>";
    }
    ?>
</body>
</html>
