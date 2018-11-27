<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai as Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
    	$data['pegawai'] = Pegawai::all();
    	return view('Pegawai.index')->with($data);
    }

    public function create()
    {
    	$data['pegawai'] = Pegawai::all();
    	return view('Pegawai.create');
    }

    public function save(Request $r)
    {
    	$file = $r->file('foto_pegawai');
    	$pegawai = new Pegawai;
    	$pegawai->nama_pegawai = $r->input('nama_pegawai');
    	$pegawai->umur_pegawai = $r->input('umur_pegawai');
    	$pegawai->jenis_kelamin = $r->input('jenis_kelamin');
    	$pegawai->foto_pegawai = $file->getClientOriginalName();
        $file->move('foto_pegawai/', $file->getClientOriginalName());
    	$pegawai->alamat = $r->input('alamat');
    	$pegawai->save();

    	return redirect()->route('pegawai.index');
    }

    public function edit($id)
    {
    	$data['pegawai'] = Pegawai::find($id);
    	return view('Pegawai.edit')->with($data);
    }

    public function update(Request $r)
    {
    	$file = $r->file('foto_pegawai');
    	$edit = Pegawai::find($r->input('id'));
    	$edit->nama_pegawai = $r->input('nama_pegawai');
    	$edit->umur_pegawai = $r->input('umur_pegawai');
    	$edit->jenis_kelamin = $r->input('jenis_kelamin');
        if (isset($file)) {
    	$edit->foto_pegawai = $file->getClientOriginalName();
        $file->move('foto_pegawai/', $file->getClientOriginalName());
        }
    	$edit->alamat = $r->input('alamat');
    	$edit->save();

    	return redirect()->route('pegawai.index');
    }

    public function delete($id)
    {
    	$pegawai = Pegawai::find($id);
    	$pegawai->delete();
    	return redirect()->route('pegawai.index');
    }
}
