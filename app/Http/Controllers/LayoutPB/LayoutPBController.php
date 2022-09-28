<?php

namespace App\Http\Controllers\LayoutPB;

use App\Http\Controllers\Controller;
use App\Models\LayoutPB;
use Illuminate\Http\Request;

class LayoutPBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view ('layoutPB.index');
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
     * @param  \App\Models\LayoutPB  $layoutPB
     * @return \Illuminate\Http\Response
     */
    public function show(LayoutPB $layoutPB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LayoutPB  $layoutPB
     * @return \Illuminate\Http\Response
     */
    public function edit(LayoutPB $layoutPB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LayoutPB  $layoutPB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LayoutPB $layoutPB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LayoutPB  $layoutPB
     * @return \Illuminate\Http\Response
     */
    public function destroy(LayoutPB $layoutPB)
    {
        //
    }
}
