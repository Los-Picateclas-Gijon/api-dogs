<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;
use Illuminate\Support\Facades\DB;

class DogApiController extends Controller
{

    public function show($id){
        $dog = Dog::where('id', $id)->get(); 
        return response()->json($dog, 200);
    }   

//     //Given
//     Dog::factory()->count(3)->create();
//     //When
//    $response = $this->getJson('/api/dogs/2');
//    //Then
//    $response->assertStatus(200)
//            ->assertJsonCount(1);

    public function update(Request $request, $id)
    {
        $dog = Dog::where('id', $id)->update($request->all());
        return response()->json($dog, 200);
    }
}    
    //Recuperar el perro
    //Hacer la modificacion de datos mediante Request
    //Guardar el perro modificado con los datos nuevos en la DB