<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumbnail = $data['thumbnail'];
        $comic->price = floatval(str_replace('$', '', $data['price']));
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = json_encode(explode(',', $data['artists']));
        $comic->writers = json_encode(explode(',', $data['writers']));

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        // Convierte los campos JSON en arrays
        $artists = json_decode($comic->artists, true) ?? [];
        $writers = json_decode($comic->writers, true) ?? [];
        return view('comics.show', compact('comic', 'artists', 'writers'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
