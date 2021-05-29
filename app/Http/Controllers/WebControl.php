<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WebControl extends Controller
{
    public function index(){
        $manga = DB::table('ms_manga')->get();
         return view('index0028',['ms_manga' => $manga]);
    }
    public function cari(Request $request){
        $cari = $request->lihat;
        $manga=DB::table('ms_manga')->where('judul_manga','like',"%".$cari."%")->paginate();
        return view('index0028',['ms_manga'=>$manga]);
    }
    public function kategori(Request $request){
        $cari = $request->lihat;
        $ms_manga = DB::table('ms_manga')
        ->join('ms_kategori', 'ms_manga.kode_kategori', '=', 'ms_kategori.kode_kategori')
        ->select('ms_manga.kode_manga', 'ms_manga.judul_manga', 'ms_manga.jumlah_manga' , 'ms_kategori.nama_kategori')->where('nama_kategori','like',"%".$cari."%")
        ->get();
        return view('kategori0028',['ms_manga'=>$ms_manga]);
    }
    public function kategorijoin(){
        $ms_manga = DB::table('ms_manga')
        ->join('ms_kategori', 'ms_manga.kode_kategori', '=', 'ms_kategori.kode_kategori')
        ->select('ms_manga.kode_manga', 'ms_manga.judul_manga', 'ms_manga.jumlah_manga' , 'ms_kategori.nama_kategori')
        ->get();
        return view('kategori0028',['ms_manga'=>$ms_manga]);
    }

}
