<?php

namespace App\Controllers\Administration;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [ 
            "title" => "Admintraor"
        ];
        return view("Administration/home",$data );
    }
}
