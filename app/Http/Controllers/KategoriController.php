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
}
