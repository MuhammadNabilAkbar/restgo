<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Daerah;

class DaerahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Daerah::all();
        return view('daerah.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daerah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $post = new Daerah;
        $post->nama = $r->input('nama');
        $post->provinsi = $r->input('provinsi');
        $post->alamat = $r->input('alamat');
        $post->kecamatan = $r->input('kecamatan');
        $post->kelurahan = $r->input('kelurahan');
        $post->kota = $r->input('kota');
        $post->save();

        return redirect(url('/daerah'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Daerah::find($id);
        return view('daerah.edit')->with('edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        $update = Daerah::find($r->input('id'));
        $update->nama = $r->input('nama');
        $update->provinsi = $r->input('provinsi');
        $update->alamat = $r->input('alamat');
        $update->kecamatan = $r->input('kecamatan');
        $update->kelurahan = $r->input('kelurahan');
        $update->kota = $r->input('kota');
        $update->save();

        return redirect(url('/daerah'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Daerah::find($id);
        $delete->delete();

        return redirect(url('daerah'));
    }
}
