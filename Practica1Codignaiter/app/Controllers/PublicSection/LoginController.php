<?php

namespace App\Controllers\PublicSection;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        $data = [ 
            "title" => "login"
        ];
    
        
        return view("PublicSection/login", $data);
    }
}
