<?php

namespace organizeCMS\lib\vehicle;

/**
 * Class VehicleMake 
 */
class VehicleMake extends \Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicle_makes';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array();
}
