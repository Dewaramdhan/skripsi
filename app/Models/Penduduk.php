<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nokk', 'nik', 'nama', 'alamat', 'rt', 'rw', 'jenis_bantuan',
    ];
    
}
