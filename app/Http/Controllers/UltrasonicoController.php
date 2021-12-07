<?php

namespace App\Http\Controllers;

use App\Models\Ultrasonico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UltrasonicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://io.adafruit.com/api/v2/JuanCastorena18/feeds/semiintegrador.ultrasonico/data');
        $jsonData = $response->object();
        foreach ($jsonData as $data){
            $model=new Ultrasonico();
            $model->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ultrasonico  $ultrasonico
     * @return \Illuminate\Http\Response
     */
    public function show(Ultrasonico $ultrasonico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ultrasonico  $ultrasonico
     * @return \Illuminate\Http\Response
     */
    public function edit(Ultrasonico $ultrasonico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ultrasonico  $ultrasonico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ultrasonico $ultrasonico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ultrasonico  $ultrasonico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ultrasonico $ultrasonico)
    {
        //
    }
}
