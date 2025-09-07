<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller

{
    public function index()
    {
        $kategoris = Kategori::latest()->paginate(5);
        return view('makan.kategori', ['kategoris' => $kategoris]);
    }
}
