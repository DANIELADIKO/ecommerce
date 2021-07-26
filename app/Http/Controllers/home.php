<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    //

    function getData() 
    {
        return ["name"=> "daniel"];
    }
}
