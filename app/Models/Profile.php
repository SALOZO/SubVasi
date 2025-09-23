<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable = ['sekolah', 'user_id', 'desa_id', 'foto'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function desa()
    {
        return $this->belongsTo(desa::class, 'desa_id');
    }
    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class, 'kecamatan_id');
    }
    public function kabupaten()
    {
        return $this->belongsTo(kabupaten::class, 'kabupaten_id');
    }
    public function provinsi()
    {
        return $this->belongsTo(provinsi::class, 'provinsi_id');
    }

    
}
