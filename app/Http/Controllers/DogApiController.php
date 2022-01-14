<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class DogApiController extends Controller
{
    //función destroy
    public function destroy($id){
        
       $dog= Dog::findOrFail($id)->delete();
    
        return response()->json($dog);
    }

   

    public function index(){

        $dogs = Dog::all();
        return response()->json($dogs); 
    }
}
