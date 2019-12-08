<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class Photocontroller extends Controller
{
    public function index()
    {
        $photos = photo::all();
        
       return view('photos.index', ['photos' => $photos]);
    }
    public function show($id)
    {
        $photo = photo::findOrfail($id);
        
        return view('photos.show', ['photo' =>$photo]);
    }
}
    