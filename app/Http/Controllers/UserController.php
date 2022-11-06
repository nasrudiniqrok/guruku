<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelass;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['kelas'] = Kelass::all();
        $data2['gurus'] = Guru::all();
        return view('index',$data, $data2);
    }
}
