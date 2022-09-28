<?php

namespace App\Http\Controllers\NetworkDiagram;

use App\Http\Controllers\Controller;
use App\Models\NetworkDiagram;
use Illuminate\Http\Request;

class NetworkDiagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('networkDiagram.index');
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
     * @param  \App\Models\NetworkDiagram  $networkDiagram
     * @return \Illuminate\Http\Response
     */
    public function show(NetworkDiagram $networkDiagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NetworkDiagram  $networkDiagram
     * @return \Illuminate\Http\Response
     */
    public function edit(NetworkDiagram $networkDiagram)
    {
         return view ('purchaseRequest.index', compact('purchaseRequest','permissions'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NetworkDiagram  $networkDiagram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NetworkDiagram $networkDiagram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NetworkDiagram  $networkDiagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(NetworkDiagram $networkDiagram)
    {
        //
    }
}
