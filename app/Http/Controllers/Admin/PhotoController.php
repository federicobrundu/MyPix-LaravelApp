<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;


/*
    This controller is created whit this command prompt
    php artisan make:controller Admin/PhotoController --model Photo --resource

    This is responsable to controll the Photo Model and also handling the CRUD operations
*/
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::all();

        $data = [
            "photos" => $photos
        ];
        return view('photos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|max:100',
            'url'=> 'required|max:100',
            'image' => 'required|image|mimes:png,jpeg|max:2048'  // Limite di 2MB
        ]);
                

        $photo = new Photo();

        $photo->title = $request->input('title');
        $photo->url = $request->input('url');


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public');
            $photo->image_path = $imagePath;
        }
        $photo->save();

        return redirect()->route('photos.index')->with('success', "L'immagine è stata inserita correttamente");

    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        $data = [
            "photo" => $photo
        ];
        return view('photos.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        $data = [
            "photo" => $photo
        ];
        return view('photos.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'title'=> 'required|max:100',
            'url'=> 'required|max:100',
        ]);
                

        $photo->title = $request->input('title');
        $photo->url = $request->input('url');

        $photo->save();

        return redirect()->route('photos.index')->with('success', "L'immagine è stata modificata correttamente");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photos.index')->with('success', "L'immagine è stata eliminata con successo");

    }
}
