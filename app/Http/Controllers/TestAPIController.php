<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestAPIController extends Controller
{
    public function Test(){
        return response()->json(['teste'=>'teste A']);
    }
}
