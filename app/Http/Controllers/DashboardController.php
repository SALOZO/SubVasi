<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $profil = Auth::check() ? Auth::user()->profile : null;
        return view('dashboard', compact('profil'));
    }
    public function test()
    {
        return auth()->id();
    }
}
