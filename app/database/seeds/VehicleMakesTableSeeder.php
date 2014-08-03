<?php

use organizeCMS\lib\vehicle\VehicleMake;

class VehicleMakesTableSeeder extends Seeder
{
    public function run()
    {
        $makes = array(
            'Abarth', 'Alfa', 'Aston Martin', 'Audi',
            'Bentley', 'Bugatti', 'BMW',
            'Cadillac', 'Caparo', 'Caterham', 'Chevrolet', 'Chrysler', 'Citroen', 'Corvette',
            'Daihatsu', 'Dodge',
            'Ferrari', 'Fiat', 'Fisker', 'Ford',
            'Gordon Murray',
            'Honda', 'Hummer', 'Hyundai',
            'Infiniti',
            'Jaguar', 'Jeep', 'Kia',
            'Koenigsegg', 'KTM',
            'Lamborghini', 'Lancia', 'Land Rover', 'Lexus', 'Lotus',
            'Maserati', 'Maybach', 'Mazda', 'McLaren', 'Mercedes-Benz', 'MG', 'Mini', 'Mitsubishi', 'Morgan',
            'Nissan', 'Noble',
            'Opel',
            'Pagani', 'Peugeot', 'Porsche', 'Proton',
            'Renault', 'Rolls-Royce',
            'Seat', 'Skoda', 'Smart', 'Subaru', 'Suzuki',
            'Tata', 'Tesla Motors', 'Toyota',
            'Vauxhall', 'VW', 'Volvo',
        );

        foreach ($makes as $make) {
            VehicleMake::create(
                array(
                    'make' => $make
                )
            );
        }
    }
}
