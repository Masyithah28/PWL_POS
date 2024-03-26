<?php
namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\view;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable)
    {
        // $user = UserModel::with('level')->get();
        // return view('user', ['data' => $user]);
        // dd($user);
        return $dataTable->render('user.index');
    }

    // public function tambah()
    // {
    //     return view('user.tambah');
    // }

    // public function tambah_simpan(Request $request)
    // {
    //     UserModel::create([
    //         'username' => $request->username,
    //         'nama'=> $request->nama,
    //         'password' => Hash::make('$request->password'),
    //         'level_id' => $request->level_id
    //     ]);
    //     return redirect('/user');
    // }

    // public function ubah($id)
    // {
    //     $user = UserModel::find($id);
    //     return view('user_ubah', ['data' => $user]);
    // }

    // public function ubah_simpan($id, Request $request)
    // {
    //     $user = UserModel::find($id);

    //     $user->username = $request->username;
    //     $user->nama = $request->nama;
    //     $user->password = Hash::make('request->password');
    //     $user->level_id = $request->level_id;

    //     $user->save();

    //     return redirect('/user');
    // }

    // public function hapus($id)
    // {
    //     $user = UserModel::find($id);
    //     $user->delete();

    //     return redirect('/user');
    // }
    public function create(): View
    {
        return view('user.create');
    }

    public function store(Request $request): RedirectResponse
    {
        
        // UserModel::create([
        //     'user_username' => $request->username,
        //     'user_nama' => $request->namaUser,
        //     'user_levelId' => $request->levelId,
        // ]);
        $validated = $request->validate([
            'user_username' => 'required',
            'user_nama' => 'required',
            'user_levelId' => 'required',

        ]);
        $validated = $request->safe()->only(['user_username', 'user_nama', 'user_levelId']);
        $validated = $request->safe()->except(['user_username', 'user_nama', 'user_levelId']);
        
        return redirect('/user');
    }

}