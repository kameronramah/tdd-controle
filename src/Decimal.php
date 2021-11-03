<?php declare(strict_types=1);

class Decimal
{
    
    public static function decimalToRoman(int $param): string 
    {
        if($param < 0 || $param > 3000) {
            return 'La valeur spécifiée n\'est pas comprise entre 0 et 3000';
        }
        if($param === 0) {
            return '';
        }
        if($param === 1) {
            return 'I';
        }
        if($param === 2) {
            return 'II';
        }
        if($param === 3) {
            return 'III';
        }
        if($param === 4) {
            return 'IV';
        }
        if($param === 5) {
            return 'V';
        }
        if($param === 6) {
            return 'VI';
        }
        if($param === 7) {
            return 'VII';
        }
        if($param === 8) {
            return 'VIII';
        }
        if($param === 9) {
            return 'IX';
        }

       return '';
    }

}
