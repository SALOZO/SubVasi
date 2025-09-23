<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function showProfile()
    {
        $prof = Profile::with('desa.kecamatan.kabupaten.provinsi')->where('user_id', Auth::id())->first();

    return view('profile', [
        'prof' => $prof,
        'data_us' => Auth::user()
    ]);
}
}
