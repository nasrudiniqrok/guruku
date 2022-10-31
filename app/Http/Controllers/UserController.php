<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['kelas'] = Kelas::all();
        $data2['gurus'] = Guru::all();
        return view('index',$data, $data2);
    }
}
