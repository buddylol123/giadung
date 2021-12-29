<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;
session_start();
use Barryvdh\DomPDF\Facade as PDF;

class HomeController extends Controller
{
    public function index(){
    	
    	$cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();
        $cate_brand = DB::table('nhasx')->orderby('mansx','desc')->get();

        $all_product = DB::table('sanpham')
        ->join('nhasx', 'sanpham.mansx', '=','nhasx.mansx')
        ->join('loaisanpham', 'sanpham.maloai', '=', 'loaisanpham.maloai')
        ->join('chitietsp', 'sanpham.masp', '=', 'chitietsp.masp')
        ->get();
        // $hinh = DB::table('hinhanh')->get();
       
 
    $hinh = DB::table('hinhanh')->where('status','1')->get();
  
    $product_km = DB::table('sanpham')
        ->join('nhasx', 'sanpham.mansx', '=','nhasx.mansx')
        ->join('loaisanpham', 'sanpham.maloai', '=', 'loaisanpham.maloai')
        ->join('chitietkm','sanpham.masp','=','chitietkm.masp')
        ->join('khuyemai','chitietkm.makm','=','khuyemai.makm')
        ->get(); 
 

 
 
   $time=Carbon::now('Asia/Ho_Chi_Minh');
    
        // select sanpham.tensp,chitietsp.mactsp,hinhanh.tenhinh,loaisanpham.tenloai
        // FROM sanpham  INNER JOIN chitietsp on sanpham.masp=chitietsp.masp
        // INNER JOIN hinhanh ON chitietsp.mactsp=hinhanh.mactsp
        // INNER JOIN loaisanpham ON loaisanpham.maloai=sanpham.maloai
        return view('pages.home')->with('cate_product',$cate_product)->with('brand_product',$cate_brand)
        ->with('all_product',$all_product)
        ->with('hinh',$hinh)
        ->with('product_km',$product_km)
        ->with('time',$time);
       
    }

    public function search(Request $request){
    	$cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();
        $cate_brand = DB::table('nhasx')->orderby('mansx','desc')->get();
        
        $keywords = $request->tukhoa;


        $product = DB::table('sanpham')->where('tensp','like','%'.$keywords.'%')
        ->orwhere('maloai','like','%'.$keywords.'%')->orwhere('mansx','like','%'.$keywords.'%')->count();

        $search_product = DB::table('sanpham')->join('nhasx', 'sanpham.mansx', '=','nhasx.mansx')
        ->join('chitietsp', 'sanpham.masp', '=', 'chitietsp.masp')
        ->join('loaisanpham', 'sanpham.maloai', '=', 'loaisanpham.maloai')
        ->where('sanpham.tensp','like','%'.$keywords.'%')
        ->orwhere('loaisanpham.tenloai','like','%'.$keywords.'%')
        ->orwhere('nhasx.tennsx','like','%'.$keywords.'%')->orderBy('sanpham.masp','asc')->get();
    
        $hinh = DB::table('hinhanh')->where('status','1')->get();
  
        $product_km = DB::table('sanpham')
            ->join('nhasx', 'sanpham.mansx', '=','nhasx.mansx')
            ->join('loaisanpham', 'sanpham.maloai', '=', 'loaisanpham.maloai')
            ->join('chitietkm','sanpham.masp','=','chitietkm.masp')
            ->join('khuyemai','chitietkm.makm','=','khuyemai.makm')
            ->get(); 
     
    
     
     
       $time=Carbon::now('Asia/Ho_Chi_Minh');
        
        
    if($product>0)
    {
        return view('pages.product.search')
        ->with('cate_product',$cate_product)
        ->with('product_km',$product_km)
        ->with('hinh',$hinh)
        ->with('time',$time)
        ->with('brand_product',$cate_brand)
        ->with('search_product', $search_product);


    }
    else
    {
        return view('pages.notfound');
    }
  
}
}
