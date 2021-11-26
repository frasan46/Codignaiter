<?php

namespace App\Controllers\PublicSection;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    { $data = [ 
        "title" => "home"
    ];
        return view("PublicSection/home", $data );
    }
}
