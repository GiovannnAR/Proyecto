<?php

namespace App\Http\Controllers\CarruselCMS;

use App\Http\Controllers\Controller;
use App\Models\CarruselCMS;
use Illuminate\Http\Request;

class CarruselCMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view ('carruselCMS.index');
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
     * @param  \App\Models\CarruselCMS  $carruselCMS
     * @return \Illuminate\Http\Response
     */
    public function show(CarruselCMS $carruselCMS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarruselCMS  $carruselCMS
     * @return \Illuminate\Http\Response
     */
    public function edit(CarruselCMS $carruselCMS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarruselCMS  $carruselCMS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarruselCMS $carruselCMS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarruselCMS  $carruselCMS
     * @return \Illuminate\Http\Response
     */
    public function destroy(carruselCMS $carruselCMS)
    {
        //
    }
}
