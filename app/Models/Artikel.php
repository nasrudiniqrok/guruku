<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = [
        "judul",
        "tgl",
        "gambar",
        "dekripsi"
    ];
}
