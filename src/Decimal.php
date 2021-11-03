<?php declare(strict_types=1);

class Decimal
{
    
    public static function decimalToRoman(int $param): string 
    {
        if($param < 0 || $param > 3000) {
            return 'La valeur spécifiée n\'est pas comprise entre 0 et 3000';
        }

        $result = '';
        $compteur = $param;
    
        $array = [
            1000 => "M",
            900 => "CM",
            500 => "D",
            400 => "CD",
            100 => "C",
            90 => "XC",
            50 => "L",
            40 => "XL",
            10 => "X",
            9 => "IX",
            5 => "V",
            4 => "IV",
            1 => "I"
        ];
        do {
            foreach($array as $key => $value) {
                if($key <= $compteur) {
                    $compteur -= $key;
                    $result .= $value;
                    break;
                }
            }
        } while ($compteur > 0);
        
        return $result;
    }

}
