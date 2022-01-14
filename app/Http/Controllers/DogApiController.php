<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class DogApiController extends Controller
{
    public function index(){

        $dogs = Dog::all();
        return response()->json($dogs); 
    }
}
