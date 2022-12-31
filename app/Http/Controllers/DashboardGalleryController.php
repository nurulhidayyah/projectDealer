<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.galleries.index', [
            'galleries' => Galery::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galleries.create');
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
            'image' => 'required|image|file|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('car-galleries');
        }

        Galery::create($validatedData);

        return redirect('dashboard/galleries')->with('success', 'New Photo has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $gallery)
    {
        return view('dashboard.galleries.show', [
            'gallery' => $gallery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $gallery)
    {
        return view('dashboard.galleries.edit', [
            'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $gallery)
    {
        $rules = [
            'image' => 'image|file|max:5120'
        ];

        $validatedData = $request->validate($rules);
        
        if ($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('car-galleries');
        }

        Galery::where('id', $gallery->id)->update($validatedData);

        return redirect('dashboard/galleries')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $gallery)
    {
        if($gallery->image){
            Storage::delete($gallery->image);
        }

        Galery::destroy($gallery->id);

        return redirect('dashboard/galleries')->with('success', 'Photo has been deleted!');
    }
}
