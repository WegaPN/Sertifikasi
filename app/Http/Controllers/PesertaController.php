<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Skema;

class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::paginate(10);
        return view('peserta.index', compact('pesertas'));
    }

    public function create()
    {
        $skemas = Skema::all(); // Ambil semua data skema dari database
        return view('peserta.create', ['skemas' => $skemas]); // Kirim data skema ke view
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'Kd_skema' => 'required',
            'Nm_peserta' => 'required',
            'Jekel' => 'required',
            'Alamat' => 'required',
            'No_hp' => 'required',
        ]);
    
        // Simpan data
        Peserta::create([
            'Kd_skema' => $request->Kd_skema,
            'Nm_peserta' => $request->Nm_peserta,
            'Jekel' => $request->Jekel,
            'Alamat' => $request->Alamat,
            'No_hp' => $request->No_hp,
        ]);
    
        // Redirect atau tampilkan pesan sukses
        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil disimpan.');
    }

    public function edit($id)
    {
        $peserta = Peserta::findOrFail($id);
        return view('peserta.edit', compact('peserta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nm_peserta' => 'required',
            'Jekel' => 'required',
            'Alamat' => 'required',
            'No_hp' => 'required',
        ]);

        $peserta = Peserta::findOrFail($id);
        $peserta->update($request->all());

        return redirect()->route('peserta.index')->with('success', 'Data peserta sertifikasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $peserta = Peserta::findOrFail($id);
        $peserta->delete();

        return redirect()->route('peserta.index')->with('success', 'Data peserta sertifikasi berhasil dihapus.');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $pesertas = Peserta::where('Nm_peserta', 'like', '%'.$search.'%')
                            ->orWhere('Jekel', 'like', '%'.$search.'%')
                            ->orWhere('Alamat', 'like', '%'.$search.'%')
                            ->orWhere('No_hp', 'like', '%'.$search.'%')
                            ->orWhere('Kd_skema', 'like', '%'.$search.'%')
                            ->paginate(10);
        return view('peserta.index', compact('pesertas'));
    }
    
}
