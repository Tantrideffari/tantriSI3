<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use App\Models\Kegiatan;
use App\Models\Kegiatanpengunjung;
use Illuminate\Http\Request;

class KepeController extends Controller
{
    public function index()
    {
        $rows = Kegiatanpengunjung::with('pengunjung', 'kegiatan')->get();
        return view('kepe.index', compact('rows'));

    }

    public function create()
    {
        $pengunjungs = Pengunjung::select('id', 'nama_pengunjung')->get();
        $kegiatans = Kegiatan::select('id', 'nama_kegiatan')->get();

        return view('kepe.create', compact('pengunjungs','kegiatans'));
    }

    public function store(Request $request)
    {

        // Simpan data
        Kegiatanpengunjung::create([
            'id_pengunjung' => $request->id_pengunjung,
            'id_kegiatan' => $request->id_kegiatan
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil disimpan!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('kepe');
    }

    public function edit(string $id)
    {
        $row = Kegiatanpengunjung::findOrFail($id);
        $pengunjungs = Pengunjung::select('id', 'nama_pengunjung')->get();
        $kegiatans = Kegiatan::select('id', 'nama_kegiatan')->get();

        return view('kepe.edit', compact('row', 'pengunjungs','kegiatans'));
    }

    public function update(Request $request, string $id)
    {
        $row = Kegiatanpengunjung::findOrFail($id);
        $row->update([
            'id_pengunjung' => $request->id_pengunjung,
            'id_kegiatan' => $request->id_kegiatan
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil diupdate!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('kepe');
    }

    public function destroy(string $id)
    {
        $row = Kegiatanpengunjung::findOrFail($id);

        $row->delete();

        // Set pesan alert
        session()->flash('alert-success', 'Data berhasil dihapus!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('kepe');
    }
}
