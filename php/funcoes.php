<?php
function somar($num1, $num2) {
    return $num1 + $num2;
}

function subtrair($num1, $num2) {
    return $num1 - $num2;
}

function multiplicar($num1, $num2) {
    return $num1 * $num2;
}

function dividir($num1, $num2) {
    if ($num2 == 0) {
        return "Divisão por zero não é permitida";
    } else {
        return $num1 / $num2;
    }
}

function escolher($num1) {
    switch ($num1) {
        case 1:
            return "Rosa";
        case 2:
            return "Preto";
        case 3:
            return "White";
        default:
            return "Cor não identificada";
    }
}

function conversaoInteiroBinario($d) {
    $binario = ''; 
    do {
        $resto = $d % 2;
        $binario = $resto . $binario;
        $d = (int)($d / 2);
    } while ($d > 0);
    return $binario;
}

function conversaoBinarioInteiro($binario) {
    $decimal = 0;
    $tamanho = strlen($binario);
    for ($i = 0; $i < $tamanho; $i++) {
        if ($binario[$tamanho - $i - 1] == '1') {
            $decimal += pow(2, $i);
        }
    }
    return $decimal;
}

function conversaoDecimalHexa($num) {
    $restos = [];
    while ($num > 0) {
        $resto = $num % 16;
        switch ($resto) {
            case 10:
                $hexa = 'A';   
                break;
            case 11:
                $hexa = 'B';
                break;
            case 12:
                $hexa = 'C';
                break;
            case 13:
                $hexa = 'D';
                break;
            case 14:
                $hexa = 'E';
                break;
            case 15:
                $hexa = 'F';
                break;
            default:
                $hexa = (string)$resto;
        }
        array_push($restos, $hexa);
        $num = intdiv($num, 16);
    }
    return implode('', array_reverse($restos));
}

function conversaoHexaDecimal($hexa) {
    $d = 0;
    $tamanho = strlen($hexa);
    for ($i = 0; $i < $tamanho; $i++) {
        $digito = $hexa[$tamanho - $i - 1];
        switch ($digito) {
            case 'A':
                $valor = 10;   
                break;
            case 'B':
                $valor = 11;
                break;
            case 'C':
                $valor = 12;
                break;
            case 'D':
                $valor = 13;
                break;
            case 'E':
                $valor = 14;
                break;
            case 'F':
                $valor = 15;
                break;
            default:
                $valor = (int)$digito;
        }
        $d += $valor * pow(16, $i);
    }
    return $d;
}

function fibonnacci($num1) {
    $termo1 = 0;
    $termo2 = 1;

    echo $termo1 . "\n";
    if ($num1 > 1) {
        echo $termo2 . "\n";
    }

    for ($i = 2; $i < $num1; $i++) {
        $proximoTermo = $termo1 + $termo2;
        echo $proximoTermo . "\n";

        $termo1 = $termo2;
        $termo2 = $proximoTermo;
    }
}

function parImpar($num) {
    if ($num % 2 == 0) {
        return "O número $num é par.";
    } else {
        return "O número $num é ímpar.";
    }
}

function idadeUsuario($num) {
    if (($num < 18) || $num >0) {
        return "O usuário é menor de Idade!!!";
    } else {
        return "O usuário é maior de Idade!!!";
    }
}

function digitadoDobro($num1) {
        return $num * 2;
}

function cToF($num1){
    return ($num1 * 9/5) + 32;
}

function maiorNumeroTres($num1, $num2, $num3){
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}

function verificarNumeros($num1, $num2) {
    if ($num1 > 0 && $num2 > 0) {
        return "Ambos os números são positivos";
    } elseif ($num1 < 0 && $num2 < 0) {
        return "Ambos os números são negativos";
    } elseif ($num1 > 0 && $num2 < 0) {
        return "O primeiro número: $num1 é positivo e o segundo: $num2 é negativo";
    } elseif ($num1 < 0 && $num2 > 0) {
        return "O primeiro número: $num1 é negativo e o segundo: $num2 é positivo";
    } elseif ($num1 == 0 && $num2 == 0) {
        return "Ambos os números são zero";
    } elseif ($num1 == 0 && $num2 != 0) {
        return "O primeiro número é zero e o segundo é diferente de zero";
    } else {
        return "O primeiro número é diferente de zero e o segundo é zero";
    }
}

function tabuada($num1, $num2) {
    $resNum1 = "Tabuada do " . $num1 . ":\n";
    $resNum2 = "Tabuada do " . $num2 . ":\n";

    for ($i = 0; $i <= 10; $i++) {
        $resNum1 .= $num1 . " * " . $i . " = " . ($num1 * $i) . "\n";
        $resNum2 .= $num2 . " * " . $i . " = " . ($num2 * $i) . "\n";
    }

    return $resNum1 . "\n" . $resNum2;
}

function somaAteNum($num1) {
    // Verifica se o número fornecido é maior que 0
    if ($num1 > 0) {
        $res = 0;
        // Loop para somar os números de 1 até o número fornecido
        for ($i = 1; $i <= $num1; $i++) {
            $res += $i; // Adiciona o número atual à soma
        }
        // Retorna a soma dos números
        return "A soma dos números de 1 a $num1 é: $res";
    } else {
        // Retorna uma mensagem de erro caso o número fornecido não seja válido
        return "O número fornecido não é válido. Por favor, insira um número maior que zero.";
    }
}

function verificarPrimo($num1){
    if ($num1 <= 1){
        return "O número digitado,$num1 não é primo. ";
    }

    $primo = true;

    for ($i = 2;$i < $num1;$i++){
        if ($num1 % $i === 0){
            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo "O número digitado,$num1 é primo. ";
    } else {
        echo "O número digitado,$num1 não é primo. ";
    }
}

function palindromo($palavra) {
    // Remove caracteres não alfanuméricos e converte para minúsculas
    $palavra = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $palavra));

    // Converte a string em um array de caracteres
    $arrayPalavra = str_split($palavra);

    // Reverte o array de caracteres
    $arrayReversa = array_reverse($arrayPalavra);

    // Converte os arrays de volta para strings
    $palavraReversa = implode('', $arrayReversa);

    // Verifica se a palavra original é igual à palavra reversa
    if ($palavra == $palavraReversa) {
        return "$palavra é um palíndromo";
    } else {
        return "$palavra não é um palíndromo";
    }
}

function calcularFatorial($num1){
    $resultado = 1;

    if ($num1 < 0){
        return "Não é possível calcular o fatorial de um núemro negativo.";
    }

    for ($i = 2;$i <= $num1;$i++){
        $resultado *= $i;
    }

    return "O fatorial de $num1 é: $resultado";
}

function paresAte($num1){
    $pares ="";
    $impares ="";

    for($i = 1;$i <= $num1;$i++){
        if ($i % 2 === 0){
            $pares += $i + " ";
        }else {
            $impares += $i = " ";
        }
    }
    return "Números pares até $num1 : $pares"
}

?>
