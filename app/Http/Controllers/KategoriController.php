<?php

namespace App\Http\Controllers;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\view;

class KategoriController extends Controller
{
    // public function update($id)
    // {
    // $kategori = KategoriModel :: find($id);
    // return view('kategori.kategori_update', ['data' => $kategori]);
    // }

    // public function update_simpan($id, Request $request)
    // {
    // $kategori = KategoriModel :: find($id);

    // $kategori->kategori_kode = $request->kodeKategori;
    // $kategori->kategori_nama = $request->namaKategori;

    // $kategori->save();
    // return redirect('/kategori');
    // }

    // public function delete($id)
    // {
    //     $kategori = KategoriModel::find($id);
    //     $kategori->delete();

    //     return redirect('/kategori');
    // }

    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create(): View 
    {
        return view('kategori.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // KategoriModel::create([
        //     'kategori_kode' => $request->kodeKategori,
        //     'kategori_nama' => $request->namaKategori,
        // ]);
        $validated = $request->validate([
            'kategori_kode' => 'required',
            'kategori_nama' => 'required',
        ]);
    return redirect('/kategori');
    }
}