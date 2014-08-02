<?php namespace organizeCMS\lib\conversion;

class Volume
{
    /* Imperial (UK) / Metric (US) */
    public static function litreToGallon($litres, $system = 'metric')
    {
        if ($system == 'imperial') {
            $gallons = $litres * 0.219969;
        } elseif ($system == 'metric') {
            $gallons = $litres * 0.264172;
        }
        return $gallons;
    }

    public static function gallonToLitre($gallons, $system = 'metric')
    {
        if ($system == 'imperial') {
            $litres = $gallons * 4.54609;
        } elseif ($system == 'metric') {
            $litres = $gallons * 3.78541;
        }
        return $litres;
    }
}
