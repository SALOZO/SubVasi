<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    protected $table = 'desa';
    protected $fillable = ['nama', 'kecamatan_id'];

    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class, 'kecamatan_id');
    }
}
