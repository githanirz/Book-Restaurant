<?php

namespace App\Http\Controllers;

use App\Models\Booktable;
use Illuminate\Http\Request;

class BooktableController extends Controller
{
    public function index()
    {
        $booktables = Booktable::latest()->paginate(5);
        return view('makan.booktable', ['booktables' => $booktables]);
    }

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
        return redirect('/home');
    }
}
