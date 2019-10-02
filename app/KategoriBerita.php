<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    //
    protected $table = 'kategoti_berita';
    //
    protected $fillable = [
        'nama','users_id', 
    ];
