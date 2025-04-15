<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use App\Models\User;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    public function index()
    {
        // $obats = Obat::latest()->get();
        $dokters = User::where('role', 'dokter')->latest()->get();
        $periksas = Periksa::latest()->paginate(10);

        return view('pasien.periksa.index', compact('periksas', 'dokters'));
    }
    public function create()
    {
        return view('pasien.periksa.create');
    }
    public function store(Request $req)
    {
        $req->validate([
            'id_dokter' => ['required'],
        ]);
        $data = [
            'id_dokter' => $req['id_dokter'],
            'id_pasien' => 4, // <- ini statis
        ];

        Periksa::create($data);

        return redirect('/pasien/periksa')->with('success', 'Data Periksa Berhasil Ditambahkan');
    }
}
