<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DecimalTest extends TestCase
{
    public function testParam()
    {
        $this->assertEquals('La valeur spécifiée n\'est pas comprise entre 0 et 3000', Decimal::decimalToRoman(-1));
        $this->assertEquals('La valeur spécifiée n\'est pas comprise entre 0 et 3000', Decimal::decimalToRoman(3001));
    }

    public function testOneNumber()
    {
        $this->assertEquals('', Decimal::decimalToRoman(0));
    }
}