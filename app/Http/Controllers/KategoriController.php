<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriModel;
use Illuminate\Database\Eloquent\Model;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = KategoriModel::all();
        return view('kategori.kategori', compact('kategori'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $kategori = KategoriModel::where('nama_kategori', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('kategori', compact('kategori', 'query'));
    }
  
    
    public function tambah()
    {
        return view('kategori.tambah');
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new KategoriModel();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect('kategori')->with('alert-success','Berhasil Menambahkan Data!');
    }

    public function edit($id)
    {
        $kategori = KategoriModel::where('kategori_id',$id)->get();
        return view('kategori.edit',compact('kategori'));
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
        $kategori = KategoriModel::where('kategori_id',$id)->first();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect('kategori');
    }

    public function hapus($id)
    {
        $kategori = KategoriModel::where('kategori_id',$id)->first();
        $kategori->delete();
        return redirect('kategori')->with('alert-success','Data berhasi dihapus!');
    }
}
