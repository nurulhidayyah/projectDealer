<?php

namespace App\Http\Controllers;

use App\Models\Brosur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardBrosurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.brosur.index', [
            'brosurs' => Brosur::latest()->get()
        ]);
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
        return view('dashboard.brosur.edit', [
            'brosur' => $brosur
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brosur  $brosur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brosur $brosur)
    {
        $rules = [
            'brosur' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('brosur')) {
            if($request->oldBrosur){
                Storage::delete($request->oldBrosur);
            }
            $validatedData['brosur'] = $request->file('brosur')->store('car-brosur');
        }

        Brosur::where('id', $brosur->id)
            ->update($validatedData);

        return redirect('dashboard/brosurs')->with('success', 'Data has been updated!');
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
