<?php namespace organizeCMS\lib\vehicle\fuel;

class FuelWidget
{
    use organizeCMS\lib\vehicle\fuel;

    public function getFuel()
    {
        Fuel::all();
    }

    public static function widget()
    {
        $fuel = self::getFuel();
    }

} 