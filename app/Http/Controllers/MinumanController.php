<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Minuman;

class MinumanController extends Controller
{
    public function index()
    {
    	$data['minuman'] = Minuman::all();
    	return view('minuman.index')->with($data);
    }
    public function create()
    {
    	$data['minuman'] = Minuman::all();
    	return view('minuman.add');
    }
    public function save(Request $r)
    {
    	$table = new Minuman;
    	$table->nama_minuman = $r->input('nama_minuman');
    	$table->kategori = $r->input('kategori');
    	$table->harga = $r->input('harga');
    	$table->deksripsi = $r->input('deksripsi');
    	$table->save();
    	return redirect()->route('minuman.index');
    }
    public function edit($id)
    {
    	$data['minuman'] = Minuman::find($id);
    	return view('minuman.edit')->with($data);
    }
    public function update(Request $r)
    {
    	$edit = Minuman::find($r->input('id'));
    	$edit->nama_minuman = $r->input('minuman');
    	$edit->kategori = $r->input('kategori');
    	$edit->harga = $r->input('harga');
    	$edit->deksripsi = $r->input('deksripsi');
    	$edit->save();
    	return redirect()->route('minuman.index');
    }
    public function delete($id)
    {
    	$minuman = Minuman::find($id);
    	$minuman->delete();
    	return redirect()->route('minuman.index');
    }
}

