<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormuserController extends Controller
{
    public function index()
    {
        return view('form_user');
    }

    public function getProvinsi()
    {
        return response()->json(DB::table('provinsi')->select('id', 'nama')->get());
    }

    public function getKabupaten($provinsiId)
    {
        return response()->json(DB::table('kabupaten')->where('provinsi_id', $provinsiId)->select('id', 'nama')->get());
    }

    public function getKecamatan($kabupatenId)
    {
        return response()->json(DB::table('kecamatan')->where('kabupaten_id', $kabupatenId)->select('id', 'nama')->get());
    }

    public function getDesa($kecamatanId)
    {
        return response()->json(DB::table('desa')->where('kecamatan_id', $kecamatanId)->select('id', 'nama')->get());
    }

public function submitProfile(Request $request)
{
    $request->validate([
        'sekolah' => 'required|string|max:255',
        'provinsi_id' => 'required|exists:provinsi,id',
        'kabupaten_id' => 'required|exists:kabupaten,id',
        'kecamatan_id' => 'required|exists:kecamatan,id',
        'desa_id' => 'required|exists:desa,id',
        'foto' => 'required|image|max:2048',
    ]);

    $data = [
        'sekolah'   => $request->sekolah,
        'user_id'   => auth()->id(),
        'desa_id'   => $request->desa_id,
    ];

    if ($request->hasFile('foto')) {
        $filePath = $request->file('foto')->store('uploads/foto', 'public');
        $data['foto'] = asset('storage/' . $filePath);
    }

    // update kalau sudah ada, kalau belum insert
    Profile::updateOrCreate(
        ['user_id' => auth()->id()],$data
    );

    return redirect()->route('index');
}
}
