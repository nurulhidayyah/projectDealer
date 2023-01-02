<?php

namespace App\Http\Controllers;

use App\Models\Brosur;
use App\Http\Requests\StoreBrosurRequest;
use App\Http\Requests\UpdateBrosurRequest;

class BrosurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBrosurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrosurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brosur  $brosur
     * @return \Illuminate\Http\Response
     */
    public function show(Brosur $brosur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brosur  $brosur
     * @return \Illuminate\Http\Response
     */
    public function edit(Brosur $brosur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrosurRequest  $request
     * @param  \App\Models\Brosur  $brosur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrosurRequest $request, Brosur $brosur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brosur  $brosur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brosur $brosur)
    {
        //
    }
}
