<?php

// Função para somar dois números
function soma($num1, $num2) {
    return $num1 + $num2;
}

// Função para dividir dois números
function divisao($num1, $num2) {
    if ($num2 == 0) {
        return "Não é possível dividir por zero.";
    } else {
        return $num1 / $num2;
    }
}

// Função para multiplicar dois números
function multiplicacao($num1, $num2) {
    return $num1 * $num2;
}

// Número fornecido pelo usuário
$numero = $_POST['numero'];

// Números para operações
$num1 = 10;
$num2 = 5;

// Realizando as operações com o número fornecido pelo usuário
echo "Soma: " . soma($numero, $num1) . "<br>";
echo "Divisão: " . divisao($numero, $num2) . "<br>";
echo "Multiplicação: " . multiplicacao($numero, $num1) . "<br>";

?>
