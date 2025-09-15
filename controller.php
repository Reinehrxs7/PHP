<?php
// controller.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['operacao']; // Corrigido: era 'operador'

    $resultado = null;

    switch ($operador) {
        case 'somar':
            $resultado = $num1 + $num2;
            break;
        case 'subtrair':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicar':
            $resultado = $num1 * $num2;
            break;
        case 'dividir':
            if ($num2 == 0) {
                $resultado = "Erro: Divisão por zero.";
            } else {
                $resultado = $num1 / $num2;
            }
            break;
        default:
            $resultado = "Operação inválida.";
    }

    echo "<h2>Resultado: $resultado</h2>";
    echo '<a href="index.php">Voltar</a>';
} else {
    // Redireciona para index se acessado diretamente
    header("Location: index.php");
    exit();
}
