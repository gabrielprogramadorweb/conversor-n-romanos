<?php

// Declaração de namespace
// O uso de namespaces é uma prática recomendada para organizar e estruturar o código.
namespace class;

// Definição da classe RomanoParaInteiro
class RomanoParaInteiro
{
    // Declaração de uma propriedade estática protegida chamada $romanNumerals
// Esta propriedade armazena um array associativo que mapeia algarismos romanos para seus valores decimais equivalentes.
protected static $romanNumerals = [
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000,
];


    // Método estático para converter número romano para inteiro
    public static function romanToInt($roman)
    {
        // Inicializa o resultado como zero
        $result = 0;

        // Inicia um loop que percorre cada caractere do número romano.
        for ($i = 0; $i < strlen($roman); ++$i) {

            // Obtém o valor correspondente ao numeral romano atual, utilizando o array associativo $romanNumerals definido na classe.
            $currentValue = isset(self::$romanNumerals[$roman[$i]]) ? self::$romanNumerals[$roman[$i]] : 0;


            // Verifica se o caractere atual é o último ou se o próximo valor é menor ou igual ao atual. Isso é importante para determinar se o valor atual será somado ao resultado ou subtraído.
            if ($i == strlen($roman) - 1 || self::$romanNumerals[$roman[$i + 1]] <= self::$romanNumerals[$roman[$i]]) {
                // Adiciona o valor ao resultado se a condição acima for verdadeira. Isso representa a lógica principal de adição ao converter algarismos romanos.
                $result += $currentValue;
            } else {
                // Subtrai o valor do resultado se a condição acima for falsa. Isso é necessário quando o numeral atual é seguido por um numeral de maior valor, indicando um caso especial, como IV (4) ou IX (9). Nesses casos, subtrai-se o valor atual ao invés de somá-lo.
                $result -= $currentValue;
            }
        }

        // Retorna o resultado final
        return $result;
    }
}
