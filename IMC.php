<!DOCTYPE html>
<html>
<head>
    <title>Calculadora IMC</title>
</head>
<body>
    <h2>Calculadora IMC</h2>
    <form method="post">
        <label for="peso">Peso (kg):</label><br>
        <input type="text" id="peso" name="peso"><br><br>
        
        <label for="altura">Altura (m):</label><br>
        <input type="text" id="altura" name="altura"><br><br>
        
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    // Função para calcular o IMC
    function calcularIMC($peso, $altura) {
        if ($altura == 0) {
            return "Altura não pode ser zero.";
        } else {
            $imc = $peso / ($altura * $altura);
            return $imc;
        }
    }
    
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        
        // Calcula o IMC
        $imc = calcularIMC($peso, $altura);
        
        // Exibe o resultado
        if (is_numeric($imc)) {
            echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";
        } else {
            echo "<h3>$imc</h3>";
        }
    }
    ?>
</body>
</html>
