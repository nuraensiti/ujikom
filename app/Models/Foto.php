<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    
        public $timestamps = false; // Menonaktifkan timestamps

    protected $table = 'foto';

    protected $fillable = [
        'galeri_id',
        'file',
        'judul'
    ];
}
