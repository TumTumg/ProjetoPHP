<?php
$num1 = 0;
$num2 = 3;
$d = 189;
$resto = '';
$binario = '';
$B = '010010011100110'; // Variável $B com valor binário
$hexa = '8A';
$fibonnacci = '';

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
   $binario = '';  // String vazia para armazenar o resultado binário
   do {
       $resto = $d % 2;
       $binario = $resto . $binario;
       $d = (int)($d / 2);
   } while ($d > 0);
   return $binario;
}

function conversaoBinarioInteiro($binario){
    $decimal = 0;
    $tamanho =strlen($binario); //Obtem o comprimento da string binária
    for ($i = 0;$i <$tamanho;$i++){
        if($binario[$tamanho -$i - 1]=='1'){
            $decimal += pow(2,$i);
        }
    }
    return $decimal;
}

function conversaoDecimalHexa($num){
    $restos = [];
    while ($num > 0) {
        $resto = $num % 16;
        switch ($resto){
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
        }//Fim do Switch
        array_push($restos,$hexa);             //No mundo da programação, um array é como uma caixa de brinquedos, 
                                               //com cada elemento representando um brinquedo. A função array_push pega um array
                                               // e adiciona um ou mais novos elementos ao final da caixa, como se você estivesse 
                                               //colocando novos brinquedos na caixa.
                                               //Por exemplo, se você tem um array com os números 1 e 2, a função array_push pode 
                                               //adicionar o número 3 ao final do array, resultando em um novo array com os números 1, 2 e 3.
                                               //Essa função é muito útil para adicionar novos dados a um array, como por exemplo, 
                                               //quando você está coletando informações de um formulário ou quando está lendo dados de um arquivo.
        $num = intdiv($num,16);
    }//Fim do While
    return implode('',array_reverse($restos)); // Imagine que você tem uma lista de ingredientes para uma torta, 
                                             // cada ingrediente em uma linha separada. O implode pega essa lista e
                                             // junta todos os ingredientes em uma única frase, separando cada ingrediente por uma vírgula.
                                             //No mundo da programação, um array é como uma pilha de livros, com cada elemento 
                                             //representando um livro. 
                                             //A função array_reverse pega esse array e inverte a ordem dos elementos, 
                                             //como se você estivesse virando a pilha de livros.
}

function conversaoHexaDecimal($hexa){
    $d = 0;
    $tamanho = strlen($hexa);
    for ($i = 0;$i < $tamanho;$i++){
        $digito = $hexa[$tamanho - $i -1];
            switch ($digito){
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
        }//Fim do switch
        $d += $valor * pow(16,$i);
    }//Fim do for
    return $d;
}

function fibonnacci($num1){
    $termo1 = 0;
    $termo2 = 1;

    echo $termo1 ."\n";
    if ($num1 > 1){
        echo $termo2."\n";
    }

    for ($i =2;$i < $num1;$i++){
        $proximoTermo= $termo1 + $termo2;
        echo $proximoTermo ."\n";

        $termo1 = $termo2;
        $termo2 = $proximoTermo;
    }
}

// Imprimir
echo "<br>A soma dos Números é: " . somar(5, 6);
echo "<br>A subtração dos Números é: " . subtrair(5, 6);
echo "<br>A multiplicação dos Números é: " . multiplicar(5, 6);
echo "<br>A divisão dos Números é: " . dividir(5, 6);
echo "<br>A escolha é: " . escolher(2);
echo "<br>A conversão do número $d para binário é: " . conversaoInteiroBinario($d);
echo "<br>A conversão do binário $B para decimal é: " . conversaoBinarioInteiro($B);
echo "<br>Decimal $d em Hexadecimal é: ".conversaoDecimalHexa($d);
echo "<br>Hexadecimal $hexa em Decimal é: ".conversaoHexaDecimal($hexa);
echo "<br>Sequência de Fibonnacci até o décimo termo: <br>";fibonnacci(10);
?>