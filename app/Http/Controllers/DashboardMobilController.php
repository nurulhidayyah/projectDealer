<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.cars.index', [
            'cars' => Mobil::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:mobils',
            'image' => 'image|file|max:5120',
            'harga' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('car-images');
        }

        Mobil::create($validatedData);

        return redirect('dashboard/cars')->with('success', 'New Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $car)
    {
        return view('dashboard.cars.show', [
            'mobil' => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $car)
    {
        return view('dashboard.cars.edit', [
            'mobil' => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $car)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'harga' => 'required'
        ];
        if ($request->slug != $car->slug) {
            $rules['slug'] = 'required|unique:mobils';
        }
        $validatedData = $request->validate($rules);
        
        if ($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('car-images');
        }

        Mobil::where('id', $car->id)
            ->update($validatedData);

        return redirect('dashboard/cars')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $car)
    {
        if($car->image){
            Storage::delete($car->image);
        }

        Mobil::destroy($car->id);

        return redirect('dashboard/cars')->with('success', 'Car has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Mobil::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
