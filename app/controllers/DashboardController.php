<?php

class DashboardController extends BaseController
{

    public function index()
    {
        $data = array(
            'enabled_modules' => array(
                'finance',
                'calendar'
            ),
            'dashboard_widgets' => array(
                'finance' => array('title' => 'Finance', 'content' => '????'),
                'calendar' => array('title' => 'Calendar', 'content' => array('2014-08-30' => 'Payday')),
                'fuel' => array('title' => 'Fuel', 'content' => '????'),
            )
        );
        return View::make('dashboard/index', $data);
    }

}
