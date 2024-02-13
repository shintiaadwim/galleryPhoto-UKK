<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();

        return view('album.album', ['albums' => $albums]);
    }


    public function show()
    {
        return view('album.add-album');
    }

    public function create(Request $request)
    {
        // Check if user is logged in
        if (Session::get('session_id')) {
            // Get user id
            $userId = Session::get('session_id');

            // Create an album
            Album::create([
                'namaalbum' => $request->namaalbum,
                'deskripsi' => $request->deskripsi,
                'adminid' => $userId,
            ]);

            // return view('album.album');
            return redirect('album');
        } else {
            // Handle the case where the user is not logged in
            // Redirect the user to the login page or display an error message
            dd(session_id());
        }
    }
}
