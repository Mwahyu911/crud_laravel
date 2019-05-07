<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $member = DB::table('member')->paginate(10);
        return view('member.index', ['member' => $member]);
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $member = DB::table('member')
            ->where('nama', 'LIKE', "%" . $cari . "%")
            ->paginate();
        return view('member.index', ['member' => $member]);
    }
    public function tambah()
    {
        return view('member.tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'pekerjaan' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ]);
        DB::table('member')->insert([
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        return redirect('/member');
    }
    public function edit($id)
    {
        $member = DB::table('member')->where('id', $id)->get();
        return view('member.edit', ['member' => $member]);
    }
    public function update(Request $request)
    {
        DB::table('member')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        return redirect('/member');
    }
    public function hapus($id)
    {
        DB::table('member')->where('id', $id)->delete();
        return redirect('/member');
    }
}
