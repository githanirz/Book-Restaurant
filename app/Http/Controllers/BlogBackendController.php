<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $blogs = Blog::latest()->paginate(8);
        return view('backend.blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogs.create', ['blogs' => Blog::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'title' => 'required',

            'gambar' => 'nullable|image|mimes:png,jpg',
            'body' => 'required',
        ]);
        if ($request->hasFile('gambar')) {
            $namaFile = 'img_' . time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move('img', $namaFile);
        } else {
            $namaFile = 'img_default.png';
        }

        $validatedData['gambar'] = $namaFile;

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);

        Blog::create($validatedData);
        return redirect('/blog-backend')->with('pesan', 'Data berhasil ditambah');
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
        return view('backend.blogs.edit', [
            'blog' => Blog::find($id),
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',

            'gambar' => 'nullable|image|mimes:png,jpg',
            'body' => 'required'
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
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Blog::where('id', $id)->update($validatedData);
        return redirect('/blog-backend')->with('pesan', 'Data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cari = Blog::find($id);
        if ($cari->gambar != '') {
            $image_url = public_path() . '/img/' . $cari->gambar;
            unlink($image_url);
        }

        Blog::destroy($id);
        return redirect('/blog-backend')->with('pesan', 'Data berhasil dihapus');
    }
}
