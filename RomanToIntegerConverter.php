<?php
class RomanToIntegerConverter {
    
    protected static $romanNumerals = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    public static function romanToInt($roman) {
        $result = 0;

        for ($i = 0; $i < strlen($roman); $i++) {
            $currentValue = self::$romanNumerals[$roman[$i]];

            if ($i == strlen($roman) - 1 || self::$romanNumerals[$roman[$i + 1]] <= self::$romanNumerals[$roman[$i]]) {
                $result += $currentValue;
            } else {
                $result -= $currentValue;
            }
        }

        return $result;
    }
}