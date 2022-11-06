<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelass extends Model
{
    use HasFactory;
    public $table = "kelass";
    protected $fillable = [
        "nama_kelas",
        "harga",
        "deskripsi",
        "gambar",
    ];
}
