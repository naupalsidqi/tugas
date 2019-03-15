<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriModel;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = KategoriModel::all();
        return view('kategori', compact('kategori'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $kategori = KategoriModel::where('nama_kategori', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('kategori', compact('kategori', 'query'));
    }

}
