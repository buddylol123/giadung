<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;
use App\Http\Requests\DiscountRequest;
session_start();

class DiscountController extends Controller
{
    public function add_dis()
    {
        $time=Carbon::yesterday('Asia/Ho_Chi_Minh');
        return view('admin.add_discount')->with('time',$time);
        
    }
    public function save_dis(DiscountRequest $request)
    {
    $data = array();
    $data['tenkhuyenmai']=$request->name;
    $data['ngaybd']=$request->ngaybd;
    $data['ngaykt']=$request->ngaykt;
    $data['phantramkm']=$request->discount;
    DB ::table('khuyemai')->insert($data);
    return redirect('/add-discount')->with('message','Thêm Khuyến mãi thành công');

    
    }

    public function all_dis()
    {
        $product_km = DB::table('khuyemai')
        ->get();
    
        
        $manager_discount = view('admin.all_discount')
        ->with('product_km',$product_km);
        

        return view ('admin_layout')->with('admin.all_discount',$manager_discount);
        
    }
    public function all_discount_detail($id)
    {
        $product_km = DB::table('chitietkm')
        ->join('khuyemai','khuyemai.makm','=','chitietkm.makm')
        ->join('sanpham','chitietkm.masp','=','sanpham.masp')
        ->where('chitietkm.makm',$id)
        ->get();
        $product_km_add = DB::table('khuyemai')
        ->where('makm',$id)
        ->get();
        $product = DB::table('sanpham');
        foreach($product_km as $p)
        {
            

       
        $product->whereNotIn('masp',[$p->masp]);
         
   
        }
     $result=$product->get();
     $count=$product->count();
        $manager_discount = view('admin.all_detail_discount')
        ->with('product_km',$product_km)->with('product',$result)
        ->with('product_km_add',$product_km_add)->with('count',$count);
        

        return view ('admin_layout')->with('admin.all_detail_discount',$manager_discount);
      
        
        
    }
    public function save_product_discount(Request $rq,$id)
    {
        
    

    $product_km_add = DB::table('khuyemai')
    ->where('makm',$id)
    ->get();
    $product = DB::table('sanpham')
    ->where('masp',$rq->masp)
    ->get();
  
    foreach($product_km_add as $a)
    {   
        foreach($product as $p)
        {  $data = array();
            $data['masp']=$rq->masp;
            $data['makm']=$id;
            $data['giagiam']=$p->gia*((100-$a->phantramkm)/100);
            $data['giachuagiam']=$p->gia;
          DB::table('chitietkm')->insert($data);
          return Redirect()->back()->with('message','thành công');
            // echo $p->gia*((100-$a->phantramkm)/100);
        }
    }
    }
}
