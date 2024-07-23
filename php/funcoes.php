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
        return "O usuário é menor de Idade!!! 190 AGORA";
    } else {
        return "O usuário é maior de Idade!!!";
    }
}
?>
