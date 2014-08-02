<?php

use organizeCMS\lib\vehicle\Vehicle;

class FuelTableSeeder extends Seeder
{
    public function run()
    {
        Vehicle::create(
            array(
                'email' => 'foo@bar.com')
        );
    }
}
