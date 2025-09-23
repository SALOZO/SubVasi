<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
     protected $table = 'kecamatan';
     protected $fillable = ['nama', 'kabupaten_id'];

     public function desa()
    {
         return $this->hasMany(desa::class, 'kecamatan_id');    
    }
    public function kabupaten()
    {
        return $this->belongsTo(kabupaten::class, 'kabupaten_id');
    }
}
