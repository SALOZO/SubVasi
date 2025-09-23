<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class submision extends Model
{
    protected $table = 'submissions';

    protected $fillable = [
        'profile_id',
        'judul',
        'deskripsi',
        'file_proposal',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profil_id');
    }
}
