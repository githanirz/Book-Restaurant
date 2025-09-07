<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->paginate(5);
        $kategoris = Kategori::all();

        return view('makan.menu', ['menus' => $menus, 'kategoris' => $kategoris]);
    }

    public function search($kategori_id)
    {
        // $kategori = Kategori::find($kategori_id);
        // $menus = $kategori->menus;
        // return view('makan.menu-detail', compact('menus'));

        $kategoris = Kategori::find($kategori_id);
        if ($kategoris) {
            $menus = Menu::where('kategori_id', $kategori_id)->paginate(12);
        } else {
            $menu = [];
        }
        return view('makan.menu-detail', ['menus' => $menus, 'kategoris' => $kategoris]);
    }
}
