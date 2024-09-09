<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengunjungController extends Controller
{
     public function halamanlogin()
     {
        return view("sesi/login");
     }

     public function postlogin(Request $request)
     {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('login');
     
    }


     public function home()
     {
         return view('home');
     }

     public function countdata($table) {
        return DB::table($table)->count();
     }

         public function index() {
            $countPengunjung = $this->countdata('pengunjung');
            return view('home', ['countPengunjung' => $countPengunjung]);
    
    }
    

     public function data_pengunjung()
    {
        return view('data_pengunjung', [
            'pengunjung' => DB::table('pengunjung')->simplePaginate(5)
        ]);
        
        $pengunjung = DB::table ('pengunjung')->get();
        
        //return $pengunjung;
        return view('data_pengunjung', ['pengunjung' =>  $pengunjung]);

    }

    public function add_pengunjung()
    {
        return view('add_pengunjung');
    }


    public function addprocess(request $request)
    {

        $data['tanggal'] = date('Y-m-d', strtotime($request->tanggal));
        DB::table('pengunjung')->insert([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        
        ]);

        return redirect('pengunjung')->with('status', 'Data Pengunjung Berhasil Di Tambah!');
    }

    public function edit_pengunjung($id)
    {
        $pengunjung = DB::table('pengunjung')->where('id', $id)->first();
        return view('edit_pengunjung', compact('pengunjung')) ;
        
    }

    public function editprocess(request $request, $id)
    {
        DB::table('pengunjung')->where('id', $id)
        ->update([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'email' => $request->email,
            'no_hp' => $request->no_hp     
        ]);

        return redirect('pengunjung')->with('status', 'Data Pengunjung Berhasil Di update!');
    }

    public function delete_pengunjung($id)
    {
        DB::table('pengunjung')->where('id', $id)->delete();
        return redirect('pengunjung')->with('status', 'Data Pengunjung Berhasil Di hapus!');
    }

    public function logout() 
    {
        Auth::logout();
        return redirect ('login')->with('success','berhasil logout');
    }

}
