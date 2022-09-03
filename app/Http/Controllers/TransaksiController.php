<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use auth;
use App\Models\Mastertransaksi;
class TransaksiController extends Controller
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
      $param['barang']=$data;
      return view('master.master')->nest('child', 'transaksi.index',$param);
       
    }

    public function add_transaksi(Request $request){

      $data['data'] = [];
      $barang = \DB::select("select * from barang where id=".$request->input('barang'));

      $harga=$barang[0]->harga_satuan;
      $qty=(int)$request->input('qty');
      $sub_total=$harga*$qty;

      $idtr=0;        
      if($request->idtr){
        $idtr=$request->idtr;
      }else{
        $post = Mastertransaksi::create([
           'total_harga' => 0
        ]);

        $idtr=$post->id;

      }


      $cek = \DB::select("select * from transaksi_pembelian_barang where transaksi_pembelian_id=".$idtr." and master_barang_id=".$request->barang);
      
      if($cek){
        DB::table('transaksi_pembelian_barang')
        ->where('transaksi_pembelian_id', $idtr)
        ->where('master_barang_id', $request->barang)
        ->delete();
      }

      DB::table('transaksi_pembelian_barang')
      ->insert(
        [
          'transaksi_pembelian_id' => $idtr,
          'master_barang_id' => $request->barang,
          'harga_satuan'  =>$harga,
          'jumlah' => $qty
        ]
      );

      $total = \DB::select("select sum(jumlah*harga_satuan) as total from transaksi_pembelian_barang where transaksi_pembelian_id=".$idtr);

      DB::table('transaksi_pembelian')
      ->where('id', $idtr)
      ->update([
        'total_harga' => $total[0]->total
      ]);

      $list = \DB::select("select * from transaksi_pembelian_barang tp join barang b on b.id=tp.master_barang_id where transaksi_pembelian_id=".$idtr);
      foreach($list as $item)
      {
         $dataTemp = array(
               'barang' => $item->nama_barang,
               'qty' => number_format($item->jumlah),
               'harga' => number_format($item->harga_satuan),
               'sub_total' => number_format($item->jumlah*$item->harga_satuan)
            );
           array_push($data['data'], $dataTemp);
           $data['total']= number_format(array_sum(str_replace(',','',array_column($data['data'], 'sub_total')))
            ); 

      }
      $data['idtr']=$idtr; 
      return response()->json(['statusCode' => 200, 'result' => $data]);
    }


    public function list_transaksi()
    {
      $data = \DB::select("select * from transaksi_pembelian");
      $param['data']=$data;
      return view('master.master')->nest('child', 'daftar_transaksi.index',$param);
       
    }

    public function detail(Request $request)
    {
      $list = \DB::select("select * from transaksi_pembelian_barang tp join barang b on b.id=tp.master_barang_id where transaksi_pembelian_id=".$request->get('id'));
      $param['data']=$list;
      return view('master.master')->nest('child', 'daftar_transaksi.detail',$param);
       
    }


}
