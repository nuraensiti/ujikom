<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'galeri';

    protected $fillable = [
        'post_id',
        'position',
        'status'
    ];
}
