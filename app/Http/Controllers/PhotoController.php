<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        return view('photo.photo');
    }

    public function show()
    {
        return view('photo.add-photo');
    }
}
