<?php //tag que indica o inciio de um bloco de codigo em php
$nome= "Luiz henrique reinehr"; //inserir string
echo "Minha primeira página PHP! <br>";//exibindo conteúdo em html
echo $nome . '<br>';//exibo o conteúdo de uma string

//numeros
$natural=1234; #inteiro positivo na base decimal
$inteiro=-234; #inteiro negativ na base decimal
echo $natural + $inteiro . '<br>'; #soma
echo $natural - $inteiro . '<br>'; #subtração
echo $natural * $inteiro . '<br>'; #multiplicação
echo $natural / -($inteiro) . '<br>'; #divisão, inversão de valor
echo $natural % -($inteiro) . '<br>'; #resto da divisão, inversão de valor

$octal=0234; #inteiro na base octal-simbolizado pelo 0 equivale 156 decimal
$hexadecimal= 0x34; #inteiro na base hexadecimal- simbolizado pelo 0x e equivale a 52 decimal

$float=1.234; #float
echo 10**4 . '<br>'; #exponenciação
$floatE=23e4; #equivale a 230.000, 23x10^4

//strings
echo "as aspas duplas permitem usar as variáveis por exemplo \$nome: $nome<br>";
echo '\$nome'; #tudo é texto
echo 1 . 2 . 3 . 'numeros' . $nome; #concatenação
/* carcteres e escape:
    \n nova linha
    \r retorno de carro
    \t tubulação horizontal
    \\ a propria barra
    \$0 simbolo $
    \' aspa simples
    \" aspa dupla
*/
//estrutura de dados
    echo "<br>";
    $array= [1,2,3,4];
    var_dump($array);
     echo "<br>" . $array[0] . "<br>";
     $dicionario = ['A'=> 1, 'B'=>2, 'C'=>3, 'D'=>4];
     var_dump($dicionario);
     echo "<br>" . $dicionario['B']. "<br>";
?>

<!-- https://dontpad.com/aulasCVD-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora em PHP</title>
</head>
<body>
<h2>Calculadora Simples</h2>

<form action="controller.php" method="post">
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" step="any" required><br><br>

    <label for="num2">Número 2:</label>
    <input type="number" name="num2" step="any" required><br><br>

    <label for="operacao">Operação:</label>
    <select name="operacao" required>
        <option value="somar">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select><br><br>

    <button type="submit">Calcular</button>
</form>
</body>
</html>
