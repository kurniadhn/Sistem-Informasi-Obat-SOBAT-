<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\Paket;
use App\Models\Obat;
use Auth;

class TransaksiController extends Controller
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
        $id = Auth()->user()->id;
        $no = 1;
        $transaksis = DB::table('transaksi')
                ->where('id_user', '=', $id)
                ->get();

        return view('user/transaksi.index', compact('no', 'transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth()->user()->id;
        $id_obat = $request->id_obat;
        $id_paket = $request->id_paket;

        if ($request->id_obat == '0') {
            $id_obat = '';
        }

        if ($request->id_paket == '0') {
            $id_paket = '';
        }

        $date = date('Y-m-d');

        DB::table('transaksi')->insert([
          'date' => $date,
          'image' => '',
          'method' => $request->method,
          'total' => $request->total,
          'status' => 'pending',
          'id_obat' => $id_obat,
          'id_paket' => $id_paket,
          'id_user' => $id,
        ]);

        return redirect()->route('user.transaksi.index')->with('success', 'Transaksi Berhasil Ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);

        return view('user/transaksi.edit', compact('transaksi'));
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
        $transaksi = Transaksi::find($id);

        $oldImage = $request->oldImage;
        $file = $request->file('image');
        if (!empty($file)){
            $image = 'transaksi_'  . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/transaksi/'), $image);
            unlink("img/transaksi/" . $oldImage);
        } else {
            $image = $oldImage;
        }

        // DB::table('transaksi')->where('id_transaksi', $id)->update([
        //   'title' => $request->title,
        //   'description' => $request->description,
        //   'date' => $request->date,
        //   'image' => $image,
        // ]);

        return redirect()->route('user.transaksi.index')->with('update', 'Transaksi Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkout_paket($id)
    {
        $paket = Paket::find($id);
        // dd($paket);

        return view('checkout_paket', compact('paket'));
    }

    public function checkout_obat($id)
    {
        $obat = Obat::find($id);
        // dd($obat);

        return view('checkout_obat', compact('obat'));
    }
}
