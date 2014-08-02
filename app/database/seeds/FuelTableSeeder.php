<?php

use organizeCMS\lib\vehicle\fuel\Fuel;

class FuelTableSeeder extends Seeder
{
    public function run()
    {
        Fuel::create(array('email' => 'foo@bar.com'));
    }
}
