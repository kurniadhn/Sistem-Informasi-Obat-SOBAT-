<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JenisObat;
use Auth;

class JenisObatController extends Controller
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
        $jenis_obats = DB::table('jenis_obat')
                ->orderBy('type', 'asc')
                ->get();
        $no = 1;
        //dd($obats);

        return view('admin/jenisobat.index', compact('no', 'jenis_obats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/jenisobat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('jenis_obat')->insert([
          'type' => $request->type,
        ]);

        return redirect()->route('admin.jenisObat')->with('success', 'Jenis Obat Berhasil Ditambahkan!');
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
        $jenis_obat = JenisObat::find($id);

        return view('admin/jenisobat.edit', compact('jenis_obat'));
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
        $jenis_obat = JenisObat::find($id);
        // dd($request);
        DB::table('jenis_obat')->where('id_jenis', $request->id)->update([
          'type' => $request->type,
        ]);

        return redirect()->route('admin.jenisObat')->with('success', 'Jenis Obat Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = JenisObat::find($id);
        JenisObat::where('id_jenis', $id)->delete();

        return redirect()->route('admin.jenisObat')->with('error', 'Jenis Obat Berhasil Dihapus!'); 
    }
}
