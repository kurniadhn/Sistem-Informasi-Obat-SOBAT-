<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Artikel;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = DB::table('artikel')->get();
        $no = 1;
        //dd($obats);

        return view('admin/artikel.index', compact('no', 'artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $image = $file->getClientOriginalName();
        $file->move(public_path('img/artikel/'), $image);

        DB::table('artikel')->insert([
          'title' => $request->title,
          'date' => $request->date,
          'description' => $request->description,
          'image' => $image,
          'url' => $request->url,
        ]);

        return redirect()->route('admin.artikel')->with('success', 'Artikel Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);

        return view('admin/artikel.edit', compact('artikel'));
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
        $artikel = Artikel::find($id);
        $oldImage = $request->oldImage;
        $file = $request->file('image');

        if (!empty($file)){
            $image = $file->getClientOriginalName();
            $file->move(public_path('img/artikel'), $image);
            unlink("img/artikel/" . $oldImage);
        } else {
            $image = $oldImage;
        }

        //dd($request);
        DB::table('artikel')->where('id', $request->id)->update([
          'title' => $request->title,
          'date' => $request->date,
          'description' => $request->description,
          'image' => $image,
          'url' => $request->url,
        ]);

        return redirect()->route('admin.artikel')->with('success', 'Artikel Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $image = $artikel->image;
        Artikel::where('id', $id)->delete();
        unlink("img/artikel/" . $image);

        return redirect()->route('admin.artikel')->with('error', 'Artikel Berhasil Dihapus!'); 
    }
}
