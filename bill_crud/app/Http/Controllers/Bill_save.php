<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bill_save extends Controller
{
    public function bill_save(Request $request)
    {

        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
    }
}
