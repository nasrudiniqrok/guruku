<?php

namespace App\Http\Controllers;

use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        $data['albums'] = Album::all();
        return view('album', $data);
    }

}
