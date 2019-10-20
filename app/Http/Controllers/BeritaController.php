<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

use App\Berita;
class BeritaController extends Controller
{
    
    public function index(){
        $Berita=Berita::all();

        return view ('berita.index',compact('Berita'));
    }
    public function show($id){
        $Berita=Berita::find($id);
        return view ( 'berita.show',compact('Berita'));

    }
    public function create(){
       $KategoriBerita  =KategoriBerita::pluck('nama','id');

        return view ( 'berita.create', compact('KategoriBerita'));
    }
    public function store(Request $request){
        $input=$request->all();
        Berita::create($input);
        return redirect(route('berita.index'));
    }
    public function destroy($id){
        $Berita = Berita::find($id);

        $Berita->delete();

        return redirect(route('berita.index'));
    }
    public function edit($id){
        $Berita=Berita::find($id);
        $KategoriBerita=KategoriBerita::pluck('nama','id');
        return view('berita.edit', compact('KategoriBerita','Berita'));

    }
    public function update($id, Request $request){
        $Berita=Berita::find($id);
        $input=$request->all();

    
        $Berita->update($input);

        return redirect(route('berita.index'));
    }

}
