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
        $this->assertEquals('I', Decimal::decimalToRoman(1));
        $this->assertEquals('II', Decimal::decimalToRoman(2));
        $this->assertEquals('III', Decimal::decimalToRoman(3));
        $this->assertEquals('IV', Decimal::decimalToRoman(4));
        $this->assertEquals('V', Decimal::decimalToRoman(5));
        $this->assertEquals('VI', Decimal::decimalToRoman(6));
        $this->assertEquals('VII', Decimal::decimalToRoman(7));
        $this->assertEquals('VIII', Decimal::decimalToRoman(8));
        $this->assertEquals('IX', Decimal::decimalToRoman(9));
    }
}