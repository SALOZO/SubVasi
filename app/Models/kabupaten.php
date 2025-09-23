<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    protected $table = 'kabupaten';
    protected $fillable = ['nama', 'provinsi_id'];

    public function kecamatan()
    {
        return $this->hasMany(kecamatan::class, 'kabupaten_id');
    }
    public function provinsi()
    {
        return $this->belongsTo(provinsi::class, 'provinsi_id');
    }
}
