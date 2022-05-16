<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Obat;

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
                ->inRandomOrder()
                ->paginate(12);
                                                                                                                     
        $artikels = DB::table('artikel')
                ->inRandomOrder()
                ->paginate(3);

      return view('dashboard', compact('obats', 'artikels'));
    }

    public function obat()
    {
        $jenis_obats = DB::table('jenis_obat')->get();

        $obats = DB::table('obat')
                ->orderBy('nama_obat', 'asc')
                ->paginate(24);
        
        return view('obat', compact('obats', 'jenis_obats'));
    }

    public function artikel()
    {                                                                                                 
        $artikels = DB::table('artikel')->get();

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
