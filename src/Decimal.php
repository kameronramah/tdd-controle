<?php declare(strict_types=1);

class Decimal
{
    
    public static function decimalToRoman(int $param): string 
    {
        if($param < 0 || $param > 3000) {
            return 'La valeur spécifiée n\'est pas comprise entre 0 et 3000';
        }
        $array = [
            0 => "",
            1 => "I",
            2 => "II",
            3 => "III",
            4 => "IV",
            5 => "V",
            6 => "VI",
            7 => "VII",
            8 => "VIII",
            9 => "IX"
        ];
        foreach($array as $key => $value) {
            if($key === $param) {
                return $value;
            }
        }
       return '';
    }

}
