<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Dflydev\DotAccessData\Data;
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
    //función destroy
    public function destroy($id){
        
       $dog= Dog::findOrFail($id)->delete();
    
        return response()->json($dog);
    }

   

    public function index(){

        $dogs = Dog::all();
        return response()->json($dogs); 
    }
    public function update(Request $request, $id)
    {
        $dog = Dog::where('id', $id)->update($request->all());
        return response()->json($dog, 200);
    }

}
