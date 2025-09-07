<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $menus = Menu::latest()->paginate(8);
        return view('backend.menus.index', ['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.menus.create', [
            'menus' => Menu::all(),
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'gambar' => 'nullable|image|mimes:png,jpg',
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'kategori_id' => 'required',
        ]);
        if ($request->hasFile('gambar')) {
            $namaFile = 'img_' . time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move('img', $namaFile);
        } else {
            $namaFile = 'img_default.png';
        }

        $validatedData['gambar'] = $namaFile;



        menu::create($validatedData);
        return redirect('/menu-backend')->with('pesan', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.menus.edit', [
            'menu' => Menu::find($id),
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'gambar' => 'nullable|image|mimes:png,jpg',
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'kategori_id' => 'required',
        ]);
        if ($request->hasFile('gambar')) {
            if ($request->image_old && $request->image_old !== 'img_default.png') {
                $image_url = public_path() . '/img/' . $request->image_old;
                unlink($image_url);
            }
            $namaFile = 'img_' . time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move('/img/', $namaFile);
        } else {
            $namaFile = $request->image_old;
        }

        $validatedData['gambar'] = $namaFile;


        Menu::where('id', $id)->update($validatedData);
        return redirect('/menu-backend')->with('pesan', 'Data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cari = Menu::find($id);
        if ($cari->gambar != '') {
            $image_url = public_path() . '/img/' . $cari->gambar;
            unlink($image_url);
        }

        Menu::destroy($id);
        return redirect('/menu-backend')->with('pesan', 'Data berhasil dihapus');
    }
}
