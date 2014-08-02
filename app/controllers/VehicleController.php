<?php

use organizeCMS\lib\vehicle\Vehicle;

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
        
    }
    
    // store method, finally create object in database
    public function store()
    {
        
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