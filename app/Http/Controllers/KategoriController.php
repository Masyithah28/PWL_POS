<?php

namespace App\Http\Controllers;
use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\StorePostRequestKategori;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\view;

class KategoriController extends Controller
{

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
        $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validated = $request->safe()->except(['kategori_kode', 'kategori_nama']);

    return redirect('/kategori');
    }

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
}