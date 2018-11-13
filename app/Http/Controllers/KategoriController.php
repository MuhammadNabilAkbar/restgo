<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori as Kategori;

class KategoriController extends Controller
{
    public function index()
    {
    	$data['kategori'] = Kategori::all();
    	return view('kategori.index')->with($data);
    }

    public function create()
    {
    	$data['kategori'] = Kategori::all();
    	return view('kategori.add');
    }

    public function save(Request $r)
    {
    	$kategori = new Kategori;
    	$kategori->nama_kategori = $r->input('nama_kategori');
    	$kategori->save();

    	return redirect()->route('kategori.index');
    }

    public function edit($id)
    {
    	
    	$data['kategori'] = Kategori::find($id);
    	return view('kategori.edit')->with($data);
    }

    public function update(Request $r)
    {
    	$edit = Kategori::find($r->input('id'));
    	$edit->nama_kategori = $r->input('nama_kategori');
    	$edit->save();

    	return redirect()->route('kategori.index');
    }

    public function delete($id)
    {
    	$kategori = Kategori::find($id);
    	$kategori->delete();
    	return redirect()->route('kategori.index');
    }


}
