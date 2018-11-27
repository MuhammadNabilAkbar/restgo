<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kritik;

class KritikSaranController extends Controller
{
    public function index()
    {
    	$kritiksaran['kritiksarann'] = Kritik::all();
    	return view('kritiksaran.index', $kritiksaran);
    }

    public function create()
    {
    	return view('kritiksaran.add');
    }

    public function save(Request $r)
    {
    	$kritik = new Kritik;

    	$kritik->nama = $r->input('nama');
    	$kritik->isi = $r->input('isi');

    	$kritik->save();

    	return redirect(url('/kritiksaran'));
    }

    public function edit($id)
    {
    	$kritik = Kritik::whereId($id)->first();
    	return view('kritiksaran.edit', ['kritik' => $kritik]);
    }

    public function update(Request $r)
    {
    	$id = $r->input('id');
    	$kritik = Kritik::find($id);

    	$kritik->nama = $r->input('nama');
    	$kritik->isi = $r->input('isi');

    	$kritik->save();

    	return redirect(url('kritiksaran'));
    }

    public function delete($id)
    {
    	Kritik::whereId($id)->delete();
    	return redirect(url('kritiksaran'));
    }
}
