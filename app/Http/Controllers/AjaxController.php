<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    //
    public function buildings(Request $request) {
        return response()->json(array('resp'=> Building::getBuildings($request->filters)), 200);
    }

    public function forfiltr(Request $request) {
        return response()->json(array('resp'=> Building::forFiltr($request->filters)), 200);
    }
}
