<?php

namespace App\Http\Controllers\LayoutPA;

use App\Http\Controllers\Controller;
use App\Models\LayoutPA;
use Illuminate\Http\Request;

class LayoutPAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view ('layoutPA.index');
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
     * @param  \App\Models\LayoutPA  $layoutPA
     * @return \Illuminate\Http\Response
     */
    public function show(LayoutPA $layoutPA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LayoutPA  $layoutPA
     * @return \Illuminate\Http\Response
     */
    public function edit(LayoutPA $layoutPA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LayoutPA  $layoutPA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LayoutPA $layoutPA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LayoutPA  $layoutPA
     * @return \Illuminate\Http\Response
     */
    public function destroy(LayoutPA $layoutPA)
    {
        //
    }
}
