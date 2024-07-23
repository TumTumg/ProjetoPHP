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
        <label>Primeiro Número:</label>
        <input type="number" id="num1" name="num1"/><br><br>

        <label>Segundo Número:</label>
        <input type="number" id="num2" name="num2"/><br><br>

        <button type="submit" name="action" value="calcular">Calcular</button><br><br>
        <button type="submit" name="action" value="verificarNum1">Verificar se o número 1 é par ou ímpar</button><br><br>
        <button type="submit" name="action" value="verificarNum2">Verificar se o número 2 é par ou ímpar</button><br><br>
        <button type="submit" name="action" value="maiorIdade">Verificar se o usuário é maior de Idade</button><br><br>

        <textarea rows="20" cols="40" readOnly>
            <?php
                // Se a requisição for um POST
                if ($_POST) {
                    // Obtém os valores dos inputs
                    $num1 = (int)$_POST['num1'];
                    $num2 = (int)$_POST['num2'];

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
                    }
                }
            ?>
        </textarea>
    </form>
</body>
</html>
