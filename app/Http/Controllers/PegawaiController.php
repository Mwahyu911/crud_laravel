<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pegawai;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $pegawai = Pegawai::all();
        $pegawai = Pegawai::paginate(5);
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }
    public function tambah()
    {
        return view('pegawai.tambah');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:pegawai',
            'alamat' => 'required|unique:pegawai|min:10'
        ]);
        // Pegawai::create([
        //     'nama' => encrypt($request->nama),
        //     'alamat' => $request->alamat
        // ]);
        $pegawai = new Pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();

        return redirect('/pegawai');
    }
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', ['pegawai' => $pegawai]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/pegawai');
    }
    public function hapus($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }

    // public function logout()
    // {
    //     //logout user
    //     auth()->logout();
    //     // redirect to homepage
    //     return redirect('/lara_crud2/login');
    // }
}