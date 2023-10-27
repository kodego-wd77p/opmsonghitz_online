<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = 'songs';

    public $timestamps = false;

    protected $fillable = [
        'song_title',
        'album_title',
        'release_year',
        'image',
        'song_file',
        'artist'
    ];

}
