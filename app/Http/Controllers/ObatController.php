<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Obat;

use Illuminate\Http\Request;

class ObatController extends Controller
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
        $obats = DB::table('obat')
                ->join('jenis_obat', 'jenis_obat.id_jenis', '=', 'obat.id_jenis')
                ->get();
        $no = 1;
        //dd($obats);

        return view('admin/obat.index', compact('no', 'obats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_obats = DB::table('jenis_obat')->get();

        return view('admin/obat.create', compact('jenis_obats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $image = $request->file('image');
        $file = $request->file('image');
        $image = $file->getClientOriginalName();
        $file->move(public_path('img/obat'), $image);

        DB::table('obat')->insert([
          'name' => $request->name,
          'unit' => $request->unit,
          'price' => $request->price,
          'image' => $image,
          'id_jenis' => $request->type,
        ]);

        return redirect()->route('admin.obat')->with('success', 'Obat Berhasil Ditambahkan!');
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
        $obat = Obat::find($id);
        $jenis_obats = DB::table('jenis_obat')->get();

        return view('admin/obat.edit', compact('obat', 'jenis_obats'));
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
        $obat = Obat::find($id);
        $oldImage = $request->oldImage;
        $file = $request->file('image');

        if (!empty($file)){
            $image = $file->getClientOriginalName();
            $file->move(public_path('img/obat'), $image);
            unlink("img/obat/" . $oldImage);
        } else {
            $image = $oldImage;
        }

        DB::table('obat')->where('id', $request->id)->update([
          'name' => $request->name,
          'unit' => $request->unit,
          'price' => $request->price,
          'image' => $image,
          'id_jenis' => $request->type,
        ]);

        return redirect()->route('admin.obat')->with('success', 'Obat Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::find($id);
        $image = $obat->image;
        Obat::where('id', $id)->delete();
        unlink("img/obat/" . $image);

        return redirect()->route('admin.obat')->with('error', 'Obat Berhasil Dihapus!'); 
    }
}
