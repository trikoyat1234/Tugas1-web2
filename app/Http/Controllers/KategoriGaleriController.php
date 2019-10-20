<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
   public function index(){
        $KategoriGaleri=KategoriGaleri::all();

        return view ('kategori_galeri.index',compact('KategoriGaleri'));
    }
    public function show($id){
        $KategoriGaleri=KategoriGaleri::find($id);
        return view ( 'kategori_galeri.show',compact('KategoriGaleri'));

    }
    public function create(){
        return view ( 'kategori_galeri.create');
    }
    public function store(Request $request){
        $input=$request->all();
        KategoriGaleri::create($input);
        return redirect(route('kategori_galeri.index'));
    }
    public function destroy($id){
        $KategoriGaleri = KategoriGaleri::find($id);

        $KategoriGaleri->delete();

        return redirect(route('kategori_galeri.index'));
    }
     public function edit($id){
        $KategoriGaleri=KategoriGaleri::find($id);
        return view('kategori_galeri.edit', compact('KategoriGaleri'));

    }
    public function update($id, Request $request){
        $KategoriGaleri=KategoriGaleri::find($id);
        $input=$request->all();

    
        $KategoriGaleri->update($input);

        return redirect(route('kategori_galeri.index'));
    }
}

