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
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $obats = DB::table('obat')
                ->inRandomOrder()
                ->paginate(12);
                                                                                                                     
        $artikels = DB::table('artikel')
                ->inRandomOrder()
                ->paginate(3);

        $settings = DB::table('setting')->get();

      return view('home', compact('obats', 'artikels', 'settings'));
    }

    public function dashboard()
    {
        $obats = DB::table('obat')
                ->inRandomOrder()
                ->paginate(12);
                                                                                                                     
        $artikels = DB::table('artikel')
                ->inRandomOrder()
                ->paginate(3);

        $settings = DB::table('setting')->get();

      return view('dashboard', compact('obats', 'artikels', 'settings'));
    }

    public function obat()
    {
        $jenis_obats = DB::table('jenis_obat')->get();

        $obats = DB::table('obat')
                ->orderBy('name', 'asc')
                ->paginate(24);
        
        return view('obat', compact('obats', 'jenis_obats'));
    }

    public function artikel()
    {                                                                                                 
        $artikels = DB::table('artikel')
                ->paginate(4);

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
