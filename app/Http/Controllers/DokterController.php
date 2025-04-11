<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Periksa;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('dokter.dashboard');
    }

    public function showPeriksa()
    {
        $obats = Obat::latest()->get();
        $periksa = Periksa::with('pasien')->where('id_dokter', auth()->id())->latest()->get();
        return view('dokter.periksa', compact('periksa', 'obats'));
    }

    public function updatePeriksa(Request $request, $id)
    {
        $request->validate([
            'tgl_periksa' => 'required|date',
            'catatan' => 'nullable|string',
            'biaya_periksa' => 'required|integer',
        ]);

        $periksa = Periksa::findOrFail($id);
        if ($periksa->id_dokter !== auth()->id()) {
            abort(403);
        }

        $periksa->update([
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => $request->catatan,
            'biaya_periksa' => $request->biaya_periksa,
        ]);

        toastr()->success('Data Periksa Pasien berhasil diperbarui!');
        return redirect()->route('periksaDokter');
    }

    public function showObat()
    {

        $obats = Obat::latest()->get();
        return view('dokter.obat', compact('obats'));
    }


    public function storeObat(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kemasan' => 'required|string|max:69',
            'harga' => 'required|integer',
        ]);

        Obat::create($request->all());
        toastr()->success('Obat Berhasil Ditambahkan');
        return redirect()->route('obatDokter');
    }

    public function updateObat(Request $request, $id)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kemasan' => 'required|string|max:69',
            'harga' => 'required|integer',
        ]);

        $obat = Obat::findOrFail($id);
        $obat->update($request->all());
        toastr()->success('Obat Berhasil Diperbarui');
        return redirect()->route('obatDokter');
    }

    public function deleteObat($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();
        toastr()->success('Obat Berhasil Dihapus');
        return redirect()->route('obatDokter');
    }
}
