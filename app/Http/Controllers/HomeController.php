<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Obat;
use App\Models\JenisObat;
use Auth;

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

        $alat_kesehatans = DB::table('image')
                ->where('image', 'like', '%Alkes%')
                ->inRandomOrder()
                ->paginate(1);

        $p3ks = DB::table('image')
                ->where('image', 'like', '%P3K%')
                ->inRandomOrder()
                ->paginate(1);

        $batuks = DB::table('image')
                ->where('image', 'like', '%Batuk%')
                ->inRandomOrder()
                ->paginate(1);

        $pileks = DB::table('image')
                ->where('image', 'like', '%Pilek%')
                ->inRandomOrder()
                ->paginate(1);

        $pencernaans = DB::table('image')
                ->where('image', 'like', '%Pencernaan%')
                ->inRandomOrder()
                ->paginate(1);

        // dd($obats);

      return view('home', compact('alat_kesehatans', 'artikels', 'batuks', 'pileks', 'p3ks', 'pencernaans', 'obats', 'settings'));
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

    public function paket()
    {
        $pakets = DB::table('paket_obat')
                ->join('image', 'paket_obat.id_paket', '=', 'image.id_paket')
                ->orderBy('paket', 'asc')
                ->paginate(2);

        // dd($pakets);
        
        return view('paket', compact('pakets'));
    }

    public function obat()
    {
        $jenis_obats = DB::table('jenis_obat')->get();

        $obats = DB::table('obat')
                ->orderBy('obat', 'asc')
                ->paginate(24);
        
        return view('obat', compact('obats', 'jenis_obats'));
    }

    public function jenis_obat($id)
    {
        $jenis_obats = DB::table('jenis_obat')->get();

        $obats = DB::table('obat')
                ->where('id_jenis', $id)
                ->orderBy('obat', 'asc')
                ->get();
        
        return view('jenis_obat', compact('obats', 'jenis_obats'));
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
