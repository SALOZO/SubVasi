<?php

namespace App\Http\Controllers;

use App\Models\submision;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function showAjuanForm()
    {
        return view('form_ajukan');
    }
    public function submit(Request $request)
    {

        $profileId = auth()->user()->profile->id;

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:2000',
            'proposal' => 'required|file|mimes:pdf|max:5120',
        ]);

        submision::create([
            'profile_id' => $profileId,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file_proposal' => $request->file('proposal')->store('proposals'),            
        ]);

        return redirect()->route('index')->with('success', 'Pengajuan berhasil dikirim!');
    }

}
