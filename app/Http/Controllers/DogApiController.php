<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogApiController extends Controller
{
    //
    public function store()
    {
        //
        $dogs = Dog::all();
        return response()->json($dogs);
    }
}
