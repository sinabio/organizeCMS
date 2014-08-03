<?php

use organizeCMS\lib\vehicle\Vehicle;
use organizeCMS\lib\vehicle\VehicleMake;

class VehicleController extends BaseController
{
    // default list all method
    public function index()
    {
        // list all vehicles
        $vehicles = Vehicle::all();
        return $vehicles;
    }

    // show one object
    public function show()
    {

    }

    // method to show form or request to create resource
    public function create()
    {
        $data = array(
            'makes' => VehicleMake::all()
        );
        return View::make('vehicles/create', $data);
    }

    // store method, finally create object in database
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'registration' => 'optional',
            'make' => 'required',
            'model' => 'required',
            'enginesize' => 'required',
            'datebought' => 'optional',
            'price' => 'optional',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('vehicles/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $vehicle = new Vehicle();
            $vehicle->make = Input::get('make');
            $vehicle->model = Input::get('model');
            $vehicle->registration = Input::get('registration');
            $vehicle->enginesize = Input::get('enginesize');
            $vehicle->date_bought = Input::get('datebought');
            $vehicle->price = Input::get('price');
            $vehicle->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('nerds');
        }
    }

    // edit an object
    public function edit()
    {

    }

    // update an edited object
    public function update()
    {

    }

    // delete an object
    public function delete()
    {

    }

}