<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
    	$data['fasilitas'] = fasilitas::all();
    	return view('fasilitas.index', $data);
    }

    public function create()
    {
    	return view('fasilitas/add');
    }

    public function save(Request $r) 
    {
    	$fasilitas = new fasilitas;

    	$fasilitas->nama = $r->input('nama');
    	$fasilitas->jumlah = $r->input('jumlah');
    	$fasilitas->deskripsi = $r->input('deskripsi');

    	$fasilitas->save();
    	return redirect('fasilitas');
    }

    public function edit($id)
    {
     $fasilitas = fasilitas::whereId($id)->first();
     return view('fasilitas.edit',['fasilitas' => $fasilitas]);
    }

     public function update(Request $r)
   {
     $fasilitas = fasilitas::find($r->input('id'));

     $fasilitas->nama = $r->input('nama');
     $fasilitas->jumlah = $r->input('jumlah');
     $fasilitas->deskripsi = $r->input('deskripsi');
     
     $fasilitas->save();

     return redirect(url('fasilitas'));
   }

     public function delete($id)
     {
        $fasilitas = fasilitas::find($id);

        $fasilitas->delete();
        return redirect()->back();
     }
}
