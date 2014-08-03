<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'CreateFuelTable' => $baseDir . '/app/database/migrations/2014_08_02_191250_create_fuel_table.php',
    'CreateSettingsTable' => $baseDir . '/app/database/migrations/2014_08_02_152241_create_settings_table.php',
    'CreateVehicleMakesTable' => $baseDir . '/app/database/migrations/2014_08_02_220059_create_vehicle_makes_table.php',
    'CreateVehiclesTable' => $baseDir . '/app/database/migrations/2014_08_02_212924_create_vehicles_table.php',
    'DashboardController' => $baseDir . '/app/controllers/DashboardController.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'FuelTableSeeder' => $baseDir . '/app/database/seeds/VehicleTableSeeder.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'InstallController' => $baseDir . '/app/controllers/InstallController.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'Symfony\\Component\\HttpFoundation\\Resources\\stubs\\FakeFile' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/FakeFile.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
    'VehicleController' => $baseDir . '/app/controllers/VehicleController.php',
    'VehicleMakesTableSeeder' => $baseDir . '/app/database/seeds/VehicleMakesTableSeeder.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
    'organizeCMS\\lib\\calendar\\Event' => $baseDir . '/app/organizeCMS/lib/calendar/Event.php',
    'organizeCMS\\lib\\conversion\\Volume' => $baseDir . '/app/organizeCMS/lib/conversion/Volume.php',
    'organizeCMS\\lib\\vehicle\\Vehicle' => $baseDir . '/app/organizeCMS/lib/vehicle/Vehicle.php',
    'organizeCMS\\lib\\vehicle\\VehicleMake' => $baseDir . '/app/organizeCMS/lib/vehicle/VehicleMake.php',
    'organizeCMS\\lib\\vehicle\\fuel\\Fuel' => $baseDir . '/app/organizeCMS/lib/vehicle/fuel/Fuel.php',
    'organizeCMS\\lib\\vehicle\\fuel\\FuelWidget' => $baseDir . '/app/organizeCMS/lib/vehicle/fuel/FuelWidget.php',
    'organizeCMS\\lib\\vehicle\\mileage\\Mileage' => $baseDir . '/app/organizeCMS/lib/vehicle/mileage/Mileage.php',
);
