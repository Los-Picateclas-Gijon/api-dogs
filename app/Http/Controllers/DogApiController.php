<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogApiController extends Controller
{
    //función destroy
    public function destroy($id){
        
       $dog= Dog::findOrFail($id)->delete();
    
        return response()->json($dog);
    }

   

}
