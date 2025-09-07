<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Role;
use Illuminate\Http\Request;

class ChefBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $chefs = Chef::latest()->paginate(8);
        return view('backend.chefs.index', ['chefs' => $chefs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.chefs.create', [
            'chefs' => Chef::all(),
            'roles' => Role::all()
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
            'role_id' => 'required',
        ]);
        if ($request->hasFile('gambar')) {
            $namaFile = 'img_' . time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move('img', $namaFile);
        } else {
            $namaFile = 'img_default.png';
        }

        $validatedData['gambar'] = $namaFile;
        Chef::create($validatedData);
        return redirect('/chef-backend')->with('pesan', 'Data berhasil ditambah');
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
        return view('backend.chefs.edit', [
            'chef' => Chef::find($id),
            'roles' => Role::all()
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
            'role_id' => 'required',

        ]);
        if ($request->hasFile('gambar')) {
            if ($request->image_old && $request->image_old !== 'img_default.png') {
                $image_url = public_path() . '/assets/img/' . $request->image_old;
                unlink($image_url);
            }
            $namaFile = 'img_' . time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move('/assets/img/', $namaFile);
        } else {
            $namaFile = $request->image_old;
        }

        $validatedData['gambar'] = $namaFile;


        chef::where('id', $id)->update($validatedData);
        return redirect('/chef-backend')->with('pesan', 'Data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cari = chef::find($id);
        if ($cari->gambar != '') {
            $image_url = public_path() . '/assets/img/' . $cari->gambar;
            unlink($image_url);
        }

        chef::destroy($id);
        return redirect('/chef-backend')->with('pesan', 'Data berhasil dihapus');
    }
}
