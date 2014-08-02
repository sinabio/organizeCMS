<?php

use organizeCMS\lib\conversion\Volume;

/* extends \PHPUnit_Framework_TestCase */

class VolumeTest extends \TestCase
{
    public function testConvertingLitreToMetricGallons()
    {
        $litres = 5.00;
        $litreToGallon = 0.264172;
        $gallons = Volume::litreToGallon($litres, 'metric');
        assert($gallons == ($litres * $litreToGallon), "Conversion should work correctly using metric gallons;");
    }

    public function testConvertingLitreToImperialGallons()
    {
        $litres = 5.00;
        $litreToGallon = 0.219969;
        $gallons = Volume::litreToGallon($litres, 'imperial');
        assert($gallons == ($litres * $litreToGallon), "Conversion should work correctly using imperial gallons;");
    }

    public function testConvertingMetricGallonsToLitres()
    {
        $gallons = 2.00;
        $gallonsToLitre = 3.78541;
        $litres = Volume::gallonToLitre($gallons, 'metric');
        assert($litres == ($gallons * $gallonsToLitre), "Conversion should work correctly using metric gallons;");
    }

    public function testConvertingImperialGallonsToLitre()
    {
        $gallons = 2.00;
        $gallonsToLitre = 4.54609;
        $litres = Volume::gallonToLitre($gallons, 'imperial');
        assert($litres == ($gallons * $gallonsToLitre), "Conversion should work correctly using imperial gallons;");
    }
}
