<?php declare(strict_types=1);

class Decimal
{
    
    public static function decimalToRoman(int $param): string 
    {
        if($param < 0 || $param > 3000) {
            return 'La valeur spécifiée n\'est pas comprise entre 0 et 3000';
        }
       return '';
    }

}
