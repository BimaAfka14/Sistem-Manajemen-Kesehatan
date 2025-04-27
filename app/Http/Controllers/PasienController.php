<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use App\Models\User;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        // Jumlah riwayat pemeriksaan pasien ini
        $jumlahRiwayat = Periksa::where('id_pasien', $userId)
            ->whereNotNull('tgl_periksa')
            ->count();

        // Ambil jadwal kontrol yang belum lewat dan yang paling dekat dengan tanggal saat ini
        $jadwalKontrol = Periksa::with('dokter')
            ->where('id_pasien', $userId)
            ->where('tgl_periksa', '>=', now()) // Hanya yang belum lewat
            ->orderBy('tgl_periksa', 'asc') // Urutkan berdasarkan tanggal periksa
            ->first(); // Ambil yang pertama (yang paling dekat)

        // Ambil pesan dokter dari pemeriksaan terakhir sebelum hari ini
        $pesanDokter = Periksa::where('id_pasien', $userId)
            ->whereDate('tgl_periksa', '<=', now()) // sudah lewat atau hari ini
            ->whereNotNull('catatan') // catatan tidak kosong
            ->orderBy('tgl_periksa', 'desc') // ambil yang paling baru
            ->value('catatan');

        $jumlahRiwayat = Periksa::where('id_pasien', auth()->id())->count();

        return view('pasien.dashboard', compact('jumlahRiwayat', 'jadwalKontrol', 'pesanDokter'));
    }



    public function showPeriksa()
    {
        $showDokter = User::where('role', 'dokter')->get();
        $periksa = Periksa::with('dokter')->where('id_pasien', auth()->id())->get();
        return view('pasien.periksa', compact('showDokter', 'periksa'));
    }

    public function storePeriksa(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required|integer',
            'id_pasien' => 'required|integer',
            'tgl_periksa' => 'nullable|string',
            'catatan' => 'nullable|string|max:255',
            'biaya_periksa' => 'nullable|integer',
        ]);

        Periksa::create($request->all());
        toastr()->success('Pemeriksaan Berhasil Ditambahkan');
        return redirect()->route('periksaPasien');
    }
}
