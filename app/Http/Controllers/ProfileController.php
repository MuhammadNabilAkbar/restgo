<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['profile'] = Profile::all();
        return view('template.profile.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $featured_image = "";
        if ($request->hasFile('image')) {
          $path = 'images';
          $file = $request->image;
          $extension = $file->getClientOriginalExtension();
          $fileName = rand(1111,9999).".".$extension;
          $file->move($path, $fileName);
          $featured_image = $fileName;
        }

        $input['email'] = $request->email;
        $input['nama_restaurant'] = $request->nama_restaurant;
        $input['akreditasi'] = $request->akreditasi;
        $input['jenis_restaurant'] = $request->jenis_restaurant;
        $input['alamat'] = $request->alamat;
        $input['no_telp'] = $request->no_telp;
        $input['image'] = $featured_image;
        $input['waktu_buka'] = $request->waktu_buka;
        $input['waktu_tutup'] = $request->waktu_tutup;
        Profile::create($input);

        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['profile'] = Profile::findOrFail($id);
        return view('template.profile.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['profiles'] = Profile::findOrFail($id);
        return view('template.profile.edit',$data);
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
        $profile = Profile::findOrFail($id);

        if ($request->file('image') == "") {
          $profile->image = $profile->image;
        }else{
          $path = 'images';
          $file = $request->file('image');
          $ext = $file->getClientOriginalExtension();
          $fileName = rand(1111,9999).".".$ext;
          $file->move($path,$fileName);
          $profile->image = $fileName;
        }
        if ($request->akreditasi == "") {
            $profile->akreditasi = $profile->akreditasi;
        }

        $profile->email = $request->email;
        $profile->nama_restaurant = $request->nama_restaurant;
        $profile->jenis_restaurant = $request->jenis_restaurant;
        $profile->alamat = $request->alamat;
        $profile->no_telp = $request->no_telp;
        $profile->waktu_buka = $request->waktu_buka;
        $profile->waktu_tutup = $request->waktu_tutup;
        $profile->update();

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Profile::findOrFail($id);
        $data->delete();

        return redirect()->route('profile.index');
    }
}
