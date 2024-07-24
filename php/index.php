<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>

<body>
    <h1>Cálculos</h1>
    <form method="POST">
        <?php include 'funcoes.php'; ?>
        <label>Primeiro Número ou Texto:</label>
        <input type="text" id="num1" name="num1"/><br><br>

        <label>Segundo Número ou Texto:</label>
        <input type="text" id="num2" name="num2"/><br><br>

        <label>Terceiro Número ou Texto:</label>
        <input type="text" id="num3" name="num3"/><br><br>

        <button type="submit" name="action" value="calcular">Calcular</button><br><br>
        <button type="submit" name="action" value="verificarNum1">Verificar se o número 1 é par ou ímpar</button><br><br>
        <button type="submit" name="action" value="verificarNum2">Verificar se o número 2 é par ou ímpar</button><br><br>
        <button type="submit" name="action" value="maiorIdade">Verificar se o usuário é maior de Idade</button><br><br>
        <button type="submit" name="action" value="dobroDigitado">Mostra em tela o dobro do número digitado</button><br><br>
        <button type="submit" name="action" value="celsiusFahr">Converte temperatura Celsius em Fahrenheit</button><br><br>
        <button type="submit" name="action" value="maiorTres">Confere qual é o maior dentre 3 números</button><br><br>
        <button type="submit" name="action" value="negativoPositivo">Confere se o número é negativo, positivo ou zero</button><br><br>
        <button type="submit" name="action" value="palinPalavra">Confere se a palavra é um palíndromo</button><br><br>
        <button type="submit" name="action" value="tabs">Faz uma tabuada do 1 ao 10 dos números digitados</button><br><br>
        <button type="submit" name="action" value="somaAte">Faz a soma de todos os números até o número digitado</button><br><br>
        <button type="submit" name="action" value="primo">Verifica se o número digitado é primo</button><br><br>
        <button type="submit" name="action" value="fatorial">Calcular o fatorial do número digitado</button><br><br>


        <textarea rows="20" cols="40" readOnly>
            <?php
                // Se a requisição for um POST
                if ($_POST) {
                    // Obtém os valores dos inputs
                    $num1 = $_POST['num1'] ?? '';
                    $num2 = $_POST['num2'] ?? '';
                    $num3 = $_POST['num3'] ?? '';

                    // Verifica qual ação foi selecionada
                    switch ($_POST['action']) {
                        case 'calcular':
                            echo "\nSomar: " . somar($num1, $num2);
                            echo "\nSubtrair: " . subtrair($num1, $num2);
                            echo "\nDividir: " . dividir($num1, $num2);
                            echo "\nMultiplicar: " . multiplicar($num1, $num2);
                            echo "\nEscolher: " . escolher($num1);
                            echo "\nConverter Inteiro para Binário número 1: " . conversaoInteiroBinario($num1);
                            echo "\nConverter Inteiro para Binário número 2: " . conversaoInteiroBinario($num2);
                            echo "\nConverter Decimal para Hexa número 1: " . conversaoDecimalHexa($num1);
                            echo "\nConverter Decimal para Hexa número 2: " . conversaoDecimalHexa($num2);
                            break;
                        
                        case 'verificarNum1':
                            echo parImpar($num1);
                            break;
                        
                        case 'verificarNum2':
                            echo parImpar($num2);
                            break;

                        case 'maiorIdade':
                            echo idadeUsuario($num1);
                            break;

                        case 'dobroDigitado':
                            echo digitadoDobro($num1);
                            break;

                        case 'celsiusFahr':
                            echo "A quantidade em graus Celsius digitado em Fahrenheit é: ".cToF($num1);
                            break;

                        case 'maiorTres':
                            echo "O maior número digitado dentre $num1, $num2 e $num3 é: ".maiorNumeroTres($num1, $num2, $num3);
                            break;

                        case 'negativoPositivo':
                            echo verificarNumeros($num1, $num2);
                            break;

                        case 'palinPalavra':
                            echo palindromo($num1);
                            break;
                        case 'tabs':
                            echo tabuada($num1, $num2);
                            break;
                        case 'somaAte':
                            echo somaAteNum($num1);
                            break;
                        case 'primo':
                            echo verificarPrimo($num1);
                            break;
                        case 'fatorial':
                            echo calcularFatorial($num1);
                            break;
                    }
                }
            ?>
        </textarea>
    </form>
</body>
</html>
