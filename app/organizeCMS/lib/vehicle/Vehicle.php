<?php

namespace organizeCMS\lib\vehicle;

class Vehicle extends \Eloquent
{
    public $make;
    public $model;
    public $date_bought;
    public $enginesize;
    public $price;
    public $user_id;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array();
}
