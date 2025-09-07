<?php

namespace App\Http\Controllers;

use App\Models\Booktable;
use Illuminate\Http\Request;

class BooktableBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $booktables = Booktable::latest()->paginate(8);
        return view('backend.booktables.index', ['booktables' => $booktables]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.booktables.create', ['booktables' => Booktable::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'nama' => 'required|min:3',
            'tanggal' => 'required',
            'waktu' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'pesan' => 'required',

        ]);
        Booktable::create($validatedData);
        return redirect('/booktable-backend')->with('pesan', 'Data Berhasil disimpan');
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
        return view('backend.booktables.edit', [
            'booktable' => Booktable::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validatedData = $request->validate([
            'nama' => 'required|min:3',
            'tanggal' => 'required',
            'waktu' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'pesan' => 'required',
        ]);
        Booktable::where('id', $id)->update($validatedData);
        return redirect('/booktable-backend')->with('pesan', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Booktable::destroy($id);
        return redirect('/booktable-backend')->with('pesan', 'Data Berhasil di Hapus');
    }
}
