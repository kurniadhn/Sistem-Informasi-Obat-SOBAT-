<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class UserController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $id = Auth()->user()->id;
        $users = DB::table('users')
                ->where('id', $id)
                ->get();

        return view('user/profile', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $id = Auth()->user()->id;
        
        DB::table('users')->where('id', $id)->update([
          'name' => $request->name,
          'address' => $request->address,
          'phone' => $request->phone,
        ]);

        return redirect()->route('user.profile')->with('update', 'Profile Berhasil Diupdate!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        return view('user/password');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $id = Auth()->user()->id;
        $users = User::find($id);
        $hashedPassword = $users->password;

        $hashedPassword = $users->password;
        if (!Hash::check($request->oldPassword, $hashedPassword)){ 
            return redirect('user/edit_password/')->with('error', 'Password Lama Salah!');
        }
        
        if ($request->confirmPassword != $request->password){ 
            return redirect('user/edit_password/')->with('error', 'Konfirmasi Password Tidak Sama!');
        }
        
        DB::table('users')->where('id', $id)->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.password')->with('update', 'Password Berhasil Diupdate!');
    }
}
