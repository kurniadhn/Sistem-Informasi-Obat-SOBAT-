<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $obats = DB::table('obat')
                // >orderBy('tgl_pelaksanaan', 'desc')
                ->inRandomOrder()
                ->where('id_jenis', '6')
                ->paginate(12);
                //dd($obats[0]->gambar);die;

        //$jenis_obats = DB::table('jenis_obat')->get();
                                                                                                                     
        $artikels = DB::table('artikel')
                //->orderBy('tanggal', 'desc')
                ->inRandomOrder()
                ->paginate(3);

      return view('dashboard', compact('obats', 'artikels'));
    }

    public function obat()
    {
        $obats = DB::table('obat')
                // >orderBy('tgl_pelaksanaan', 'desc')
                ->inRandomOrder()
                ->where('id_jenis', '6')
                ->paginate(12);
                //dd($obats[0]->gambar);die;

        return view('obat', compact('obats'));
    }

    public function artikel()
    {                                                                                                 
        $artikels = DB::table('artikel')
                //->orderBy('tanggal', 'desc')
                ->inRandomOrder();
                //->paginate(3);

        return view('artikel', compact('artikels'));
    }

    public function keranjang()
    {
        return view('keranjang');
    }

    public function detail_artikel()
    {
        return view('detail_artikel');
    }

    public function detail_obat()
    {
        return view('detail_obat');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
