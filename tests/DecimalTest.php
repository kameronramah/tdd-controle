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

    public function testTwoNumbers()
    {
        $this->assertEquals('XII', Decimal::decimalToRoman(12));
        $this->assertEquals('XIX', Decimal::decimalToRoman(19));
        $this->assertEquals('X', Decimal::decimalToRoman(10));
        $this->assertEquals('XV', Decimal::decimalToRoman(15));
        $this->assertEquals('XIV', Decimal::decimalToRoman(14));
        $this->assertEquals('XLIV', Decimal::decimalToRoman(44));
        $this->assertEquals('XCIX', Decimal::decimalToRoman(99));
    }

    public function testThreeNumbers()
    {
        $this->assertEquals('CXCIX', Decimal::decimalToRoman(199));
        $this->assertEquals('DLV', Decimal::decimalToRoman(555));
        $this->assertEquals('CDXLIX', Decimal::decimalToRoman(449));
        $this->assertEquals('DCLXIII', Decimal::decimalToRoman(663));
        $this->assertEquals('CMLXXXIX', Decimal::decimalToRoman(989));
    }

    public function testFourNumbers()
    {
        $this->assertEquals('MCMXCIX', Decimal::decimalToRoman(1999));
        $this->assertEquals('MMDLV', Decimal::decimalToRoman(2555));
        $this->assertEquals('MMCDXCI', Decimal::decimalToRoman(2491));
        $this->assertEquals('MXLV', Decimal::decimalToRoman(1045));
        $this->assertEquals('MMCMLIV', Decimal::decimalToRoman(2954));
        $this->assertEquals('MMCDLXXIX', Decimal::decimalToRoman(2479));
    }
}