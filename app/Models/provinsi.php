<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    protected $table = 'provinsi';
    protected $fillable = ['nama'];

    public function kabupaten()
    {
        return $this->hasMany(kabupaten::class, 'provinsi_id');
    }
}
