<?php

namespace class;

class InteiroParaRomano
{
    // Declaração de uma propriedade protegida e estática que armazena um array associativo, mapeando algarismos romanos para seus equivalentes inteiros.
    
    protected static $romanNumerals = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    // Declaração de um método público e estático chamado intToRoman que converte um número inteiro para algarismos romanos.
    public static function intToRoman($integer)
    {
        //  Inicializa uma string vazia para armazenar o resultado final da conversão.
        $result = '';

        // Loop através do array $romanNumerals, onde $roman é o algarismo romano e $value é o valor associado.
        foreach (self::$romanNumerals as $roman => $value) {
            // Calcula quantas vezes o algarismo romano pode ser subtraído do número original.
            $matches = intval($integer / $value);

            // Concatena o algarismo romano multiplicado pelo número de vezes que pode ser subtraído.
            $result .= str_repeat($roman, $matches);

            // Reduz o número original pelo valor do algarismo romano multiplicado pelo número de vezes usado.
            $integer %= $value;
        }

        // Retorna o resultado final da conversão.
        return $result;
    }
}
