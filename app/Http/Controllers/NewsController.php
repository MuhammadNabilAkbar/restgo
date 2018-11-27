<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{





     public function index()
    {
        $data['news'] = News::all();
/*        $user = User::all();
*/        return view('template.News.index')->with($data)/*->with('user',$user)*/;
    }



    
    public function create(){

    return view('template.News.create');

}
public function save(Request $r){


$news = new News;
            $news->judul = $r->input('judul'); 
            $news->isi = $r->input('isi'); 
            $file = $r->file('gambar');
            $news ->gambar = $file-> getClientOriginalName();
            $file->move('gambar/',$file->getClientOriginalName());
            $news->save();
            return redirect(url('news'));




}
public function edit($id){
            $data['news'] = News::find($id);

    return view('template.News.edit')->with($data);
}
public function update(Request $r){



                    $id = $r->input('id');
            
            $news = News::find($id);
             $news->judul = $r->input('judul'); 
            $news->isi = $r->input('isi'); 
            $file = $r->file('gambar');
            $news ->gambar = $file-> getClientOriginalName();
            $file->move('gambar/',$file->getClientOriginalName());
            $news->save();
            return redirect(url('news'));


}
public function delete($id)
    {
        News::whereId($id)->delete();
        return redirect(url('news'));
    }

}
