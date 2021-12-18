<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Sanphamreq;
use App\hinhanh;
use Illuminate\Support\Facades\Mail;
use App\sanpham;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;

session_start();

class CartController extends Controller
{
    public function save_cart(Request $req)
    { 

        $product_id =$req->productid_hidden;
        $sl = $req->sl;
        $sp =DB::table('sanpham')
        // ->join('chitietsp', 'sanpham.masp', '=', 'chitietsp.masp')
        ->where('masp',$product_id)
        ->first();
        $product_km = DB::table('sanpham')
        ->join('chitietkm','sanpham.masp','=','chitietkm.masp')
        ->join('khuyemai','chitietkm.makm','=','khuyemai.makm')
        ->where('sanpham.masp',$product_id)
        ->first();

        $data['id']=$sp->masp;
        $data['qty']=$sl;
        $data['name']=$sp->tensp;
        $time=Carbon::now('Asia/Ho_Chi_Minh');
        if($product_km && $time <= $product_km->ngaykt && $time >=$product_km->ngaybd )
        {
            $data['price']=$product_km->giagiam;
        }
        else
        {
            $data['price']=$sp->gia;   
        } 
        $data['weight']='123';
        $data['options']['hinh']=$sp->hinh;
        if($sp->soluong > 0)
        {
        Cart::add($data);
        return Redirect::to('/show-cart');
        }
        {
           return redirect()->back()->with('message','Sản phẩm hết hàng');
        }
    }
    public function show_cart()
    {   $cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();
        $cate_brand = DB::table('nhasx')->orderby('mansx','desc')->get();
        return view('pages.cart.show_cart')
        ->with('cate_product',$cate_product)
        ->with('brand_product',$cate_brand);

    }
    public function del_cart($rowId)
    {   
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');

    }
    public function update_cart(Request $rq)
    {  
         $id=$rq->masp;
        $sl=$rq->sl;;
        $rowid=$rq->rowId;
        $sp =DB::table('sanpham')
        ->where('masp',$id)
        ->first();
        if($sl > $sp->soluong)
        {
            Session()->put('message','Sản phẩm '.$sp->tensp.' còn số lượng là '.$sp->soluong.'.Vui lòng không nhập giá trị lớn hơn số lượng tồn');
            return Redirect::to('/show-cart');
      }
        else 
      {
        Cart::update($rowid,$sl);
        Session()->put('message',null);
        return Redirect::to('/show-cart');
        
      }
      

    }
    public function payment_show()
    {
        $cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();
        $cate_brand = DB::table('nhasx')->orderby('mansx','desc')->get();
        return view('pages.cart.payment')
        ->with('cate_product',$cate_product)
        ->with('brand_product',$cate_brand);
    }
    public function save_payment(Request $rq)
    {
        $now =Carbon::now('Asia/Ho_Chi_Minh');
        $data_dh= array();
        $data_dh['makh']=Session::get('makh');
        $data_dh['tenkh']=$rq->name;
        $data_dh['diachi']=$rq->add;
        $data_dh['ngaydathang']=$now;
        $data_dh['sodienthoai']=$rq->phone;
        $data_dh['ghichu']=$rq->mess;
        $data_dh['trangthai']='Đang chờ xử lý'; 
        $data_dh['tongtien']=Cart::subtotal();
        $order_id =DB::table('donhang')->insertGetID($data_dh);  
//         echo '<pre>';
// print_r($data_dh);
//         echo '</pre>';
        
         
       
        $data_ctdh= array();
        $cart =Cart::content();
        foreach($cart as $m)
        {   $arr_mail[] = array(
            'tensp'=> $m->name,
            'soluong' => $m->qty,
            'gia'=>$m->price,
            'tongtien'=>Cart::subtotal()
        );
          
        }
        foreach($cart as $c)
        { 
        
            $data_ctdh['madh'] = $order_id;
            $data_ctdh['masp'] = $c->id;
            $data_ctdh['soluong'] = $c->qty;
            $data_ctdh['gia'] = $c->price;
            DB::table('chitietdh')->insert($data_ctdh);
            $b=DB::table('sanpham')->select('soluong')->where('masp',$c->id)->get();
            foreach($b as $q)
            {
             $e=  $q->soluong-$c->qty;
             $d =(string)$e;
      
            //  echo '<pre>';
            //  print_r($d);
            //          echo '</pre>';
            DB::table('sanpham')->where('masp',$c->id)->update(['soluong' =>$d]);

                 
            }
   
        

        }
       
        
    
        $email = Session::get('email');
        $name = Session::get('tenkh');
        Mail::send('email.email',['data_dh'=>$data_dh,'data_ctdh'=>$arr_mail,'data_madh'=>$data_ctdh],function($message) use($email,$name){
        $message->from('thanhloi486@gmail.com','SHOP E-PIE');
        $message->to($email,$name);
        $message->subject('Xác nhận đơn hàng'); 
        });  
      
        Cart::destroy();
        return Redirect::to('/thanh-cong/'.$order_id);
        
        
     
    }
    public function send_e()
    {
        return view('email.email');
    }
    public function thanhcong()
    {   
        $cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();
        $cate_brand = DB::table('nhasx')->orderby('mansx','desc')->get();
        return view('pages.cart.thanh-cong')
        ->with('cate_product',$cate_product)
        ->with('brand_product',$cate_brand);
    }
    public function check()
    {
        $cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();
        $cate_brand = DB::table('nhasx')->orderby('mansx','desc')->get();
        $dh = DB::table('donhang')->where('makh',Session::get('makh'))->orderby('madh','desc')->get();
        return view('pages.cart.check')
        ->with('cate_product',$cate_product)
        ->with('brand_product',$cate_brand)
        ->with('dh',$dh);
    }
    public function check_detail($id)
    {
        $cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();
        $cate_brand = DB::table('nhasx')->orderby('mansx','desc')->get();

        $dh = DB::table('donhang')->select('donhang.tenkh','donhang.tongtien','sanpham.tensp','chitietdh.soluong','chitietdh.gia','donhang.tenkh')
        ->where('makh',Session::get('makh'))
        ->where('donhang.madh',$id)->orderby('donhang.madh','desc')
        ->join('chitietdh', 'donhang.madh', '=', 'chitietdh.madh')
        ->join('sanpham', 'sanpham.masp', '=', 'chitietdh.masp')
        ->get();
        
        $dh2 = DB::table('donhang')
        ->where('makh',Session::get('makh'))
        ->where('madh',$id)->orderby('madh','desc')->get();

        return view('pages.cart.check_detail')
        ->with('cate_product',$cate_product)
        ->with('brand_product',$cate_brand)
        ->with('dh',$dh)
        ->with('dh2',$dh2)
        ->with('id',$id);
        
       

    }
    //huy don ben user
    public function huy_don($id)
    {
        DB::table('donhang')->where('madh',$id)->update(['trangthai' => 'Hủy đơn']);
        
        
        return Redirect()->back()->with('message','Hủy đơn thành công');
    }


}
