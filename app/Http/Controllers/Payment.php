<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Sanphamreq;
use App\hinhanh;
use Barryvdh\DomPDF\Facade as PDF;


session_start();

class Payment extends Controller
{
    public function payment_admin()
    {
        $dh2 = DB::table('donhang')->orderby('madh','desc')
        ->join('khachhang', 'donhang.makh', '=', 'khachhang.id')
        ->get();
        $manager_payment = view('admin.payment')
        ->with('dh',$dh2);
        
        return view ('admin_layout')->with('dh',$manager_payment);
      
    }
    public function detail_dh($id)
    {
        $dh2 = DB::table('donhang')->select('donhang.madh','donhang.tongtien','sanpham.tensp','chitietdh.soluong','chitietdh.gia','donhang.ngaydathang','donhang.trangthai','donhang.tenkh','donhang.diachi','donhang.sodienthoai')
        ->where('donhang.madh',$id)->orderby('donhang.madh','desc')
        ->join('khachhang', 'donhang.makh', '=', 'khachhang.id')
        ->join('chitietdh', 'donhang.madh', '=', 'chitietdh.madh')
        ->join('sanpham', 'sanpham.masp', '=', 'chitietdh.masp')
        ->get();
        $dh1 = DB::table('donhang')->where('donhang.madh',$id)->get();
        $manager_payment = view('admin.detail_dh')
        ->with('dh',$dh2)
        ->with('dh1',$dh1);
        
        return view ('admin_layout')->with('dh',$manager_payment);
      
    }
    public function status($id)
    {
    //     $dh2 = DB::table('donhang')->where('donhang.madh',$id)->orderby('donhang.madh','desc')
    //     ->join('khachhang', 'donhang.makh', '=', 'khachhang.id')
    //     ->join('chitietdh', 'donhang.madh', '=', 'chitietdh.madh')
    //     ->join('sanpham', 'sanpham.masp', '=', 'chitietdh.masp')
    //     ->get();
    $dh2 = DB::table('donhang')->where('donhang.madh',$id)->orderby('donhang.madh','desc')
    ->get();
    $manager_payment = view('admin.status')
    ->with('dh',$dh2);
        
        return view ('admin_layout')->with('admin.status',$manager_payment );
      
    }
    public function save_status($id,Request $rq)
    {
    //     $dh2 = DB::table('donhang')->where('donhang.madh',$id)->orderby('donhang.madh','desc')
    //     ->join('khachhang', 'donhang.makh', '=', 'khachhang.id')
    //     ->join('chitietdh', 'donhang.madh', '=', 'chitietdh.madh')
    //     ->join('sanpham', 'sanpham.masp', '=', 'chitietdh.masp')
    //     ->get();
    $data=array();
    $data['trangthai']=$rq->status;
    if( $data['trangthai']=='Hủy đơn')
    {
        
        $b=DB::table('chitietdh')->select('chitietdh.madh','chitietdh.soluong as slban','sanpham.soluong as slton','sanpham.masp')
        ->join('sanpham', 'chitietdh.masp','=','sanpham.masp')
        ->where('madh',$id)->get();
    //    dd($b);
        foreach($b as $q)
        {
       
      $e=  $q->slban + $q->slton;
         $d =(string)$e;
        // echo '<pre>';
        // print_r($e);
        // echo '</pre>';
        
        DB::table('sanpham')->where('masp',$q->masp)->update(['soluong' =>$d]);
        DB::table('donhang')->where('madh',$id)->update($data);
        Session()->put('message','Cập nhật thành công');
        return Redirect::to('payment-admin');      
        }
    }
    else
    {
       DB::table('donhang')->where('madh',$id)->update($data);
    Session()->put('messcapnhat','Cập nhật thành công');
    return Redirect::to('payment-admin');
    }
    }
    public function dh_pdf($id)
    {  $dh2 = DB::table('donhang')->select('donhang.madh','donhang.tongtien','sanpham.tensp','chitietdh.soluong','chitietdh.gia','donhang.ngaydathang','donhang.trangthai','donhang.tenkh','donhang.diachi','donhang.sodienthoai')
      ->where('donhang.madh',$id)->orderby('donhang.madh','desc')
      ->join('khachhang', 'donhang.makh', '=', 'khachhang.id')
      ->join('chitietdh', 'donhang.madh', '=', 'chitietdh.madh')
      ->join('sanpham', 'sanpham.masp', '=', 'chitietdh.masp')
      ->get();
    //   $manager_payment = view('pdf.hd')
    //   ->with('dh',$dh2);
    //   $pdf = PDF::loadView('pdf.hd')->with('dh',$manager_payment);
    //   return $pdf->stream('hd.pdf');
    return view('pdf.hd')->with('dh',$dh2);
       
    }
    public function import_pdf($id)
    {  
        $pdf = PDF::loadHTML($this->dh_pdf($id));
         return $pdf->stream('hd.pdf');
    }

}


