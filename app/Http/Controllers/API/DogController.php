<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDogRequest;
use App\Http\Requests\UpdateDogRequest;
use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Dog::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDogRequest $request)
    {
        Dog::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Dog stored'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $id)
    {
        return response()->json([
            'res' => true,
            'dog' => $id
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDogRequest $request, Dog $dog)
    {
        $dog->update($request->all());
        return response()->json([
            'res' => true,
            'message' => 'Dog Updated'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
