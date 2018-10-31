<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['makanan'] = Makanan::all();
        return view('makanan.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['makanan'] = Makanan::all();
        return view('makanan.add')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $table = new Makanan;
      $table->nama_makanan = $request->input('makanan');
      $table->kategori = $request->input('kategori');
      $table->level_pedas = $request->input('level');
      $table->harga = $request->input('harga');
      $table->deksripsi = $request->input('deksripsi');
      $table->save();
      return redirect('makanan');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data['makanan'] = Makanan::all();
       return view('makanan.edit')->with($data);
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makanan = Makanan::find($id);
        return view('makanan.edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $makanan = Makanan::find($id);
        $makanan->nama_makanan = $request->input('makanan');
        $makanan->kategori = $request->input('kategori');
        $makanan->level_pedas = $request->input('level');
        $makanan->harga = $request->input('harga');
        $makanan->deksripsi = $request->input('deksripsi');
        $makanan->save();
        return redirect()->route('makanan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Makanan::find($id);        
        $table->delete();//delete table
        return back();
    }
}
