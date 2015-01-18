<?php

namespace organizeCMS\lib\vehicle\fuel;

use organizeCMS\lib\vehicle\fuel\fuel;

class FuelWidget
{
    public function getFuel()
    {
        Fuel::all();
    }

    public static function widget()
    {
        $fuel = self::getFuel();
    }
}
