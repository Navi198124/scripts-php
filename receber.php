<?php
$erros = [];

// Pega e valida os dados do formulário
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// Verifica cada campo separadamente e adiciona erro se necessário
if (!$nome) {
    $erros[] = "Nome inválido.";
}

if ($idade === false) {
    $erros[] = "Idade inválida.";
}

if (!$email) {
    $erros[] = "Email inválido.";
}

// Se houver erros, exibe todos
if (!empty($erros)) {
    echo "<h1>Erros encontrados:</h1><ul>";
    for ($i = 0; $i < count($erros); $i++) {
        echo $erros[$i]."<br>";
    }
    echo "</ul>";
    echo '<p><a href="index.html">Voltar</a></p>';
} else {
    // Se tudo estiver certo, mostra os dados
    echo "<h1>Dados recebidos com sucesso:</h1>";
    echo "Nome: $nome<br>";
    echo "Idade: $idade<br>";
    echo "Email: $email<br>";
}
?>
