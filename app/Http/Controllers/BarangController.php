<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use auth;
class BarangController extends Controller
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
      $data = \DB::select("select * from barang");
      $param['data']=$data;
      return view('master.master')->nest('child', 'barang.index',$param);
       
    }

    public function tambah_barang()
    {
       return view('master.master')->nest('child', 'barang.add');
       
    }

    public function insert_barang(Request $request){

        DB::table('barang')
          ->insert(
            [
                'nama_barang' => $request->nama,
                'harga_satuan' => str_replace('.','',$request->harga),
            ]
        );
          return response()->json(['statusCode' => 200, 'result' => 'berhasil']);
    }

}
