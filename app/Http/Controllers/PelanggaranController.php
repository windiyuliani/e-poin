<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PelanggaranController extends Controller
{
    public function index(): View
    {
        // Get Data dari DB
        $pelanggarans = Pelanggaran::latest()->paginate(10);

        if (request('cari')) {
            $pelanggarans = $this->search(request('cari'));
        }

        return view('admin.pelanggaran.index', compact('pelanggarans'));
    }

    public function create(): View
    {
        return view('admin.pelanggaran.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'jenis' => 'required|string|max:250',
            'konsekuensi' => 'required|string|max:250',
            'poin' => 'required|integer'
        ]);

        Pelanggaran::create([
            'jenis' => $request->jenis,
            'konsekuensi' => $request->konsekuensi,
            'poin' => $request->poin
        ]);

        return redirect()->route('pelanggaran.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    private function search($keyword)
    {
        return Pelanggaran::where('jenis', 'like', "%$keyword%")
                          ->orWhere('konsekuensi', 'like', "%$keyword%")
                          ->paginate(10);
    }
}
?>
