<?php

namespace App\Http\Controllers;
use App\Http\Requests\register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\User;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\infocusrequest;
use Illuminate\Support\Facades\Hash;



use App\Model\khachhang;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Sentinel;
session_start();
class Pagecontroller extends Controller
{
    
    public function getDangky()
    {   $cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();
        $cate_brand = DB::table('nhasx')->orderby('mansx','desc')->get();
        return view('pages.dangky')->with('cate_product',$cate_product)->with('brand_product',$cate_brand);
    }
    
    public function postdangky(register $request)
    {
        $data = array();

    

        $data['name']=$request->name;
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=bcrypt($request->password);
        $data['phone']=$request->phone;
        $data['diachi']=$request->address;
    
       
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        DB::table('khachhang')->insert($data);
        return Redirect::to('/dangnhap');
        
    
       


        return Redirect::to('/dangnhap');
    }
    
    public function getlogin()
    {   	$cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();

        $brand_product = DB::table('nhasx')->orderby('mansx','desc')->get();
        return view('pages.dangnhap')->with('cate_product',$cate_product)->with('brand_product',$brand_product);
    }

    public function postlogin(Request $request)
    {  
        //dd($re->all());
        $email = $request->email;
        $matkhau = $request->password;
        $result = DB::table('khachhang')->where('email',$email)->first();//lay gioi han 1 user
        if($result && Hash::check($matkhau,$result->password)) // check login chưa
        {     Session()->put('name',$result->name);
            Session()->put('email',$result->email);
          
            //Session()->put('password',$result->password);
            Session()->put('diachi',$result->diachi);
            Session()->put('phone',$result->phone);
            Session()->put('makh',$result->id);
         

            return Redirect::to('trang-chu');
        }
        else
             Session()->put('message','Mật khẩu hoặc tài khoản sai');
             return Redirect::to('dangnhap');
             

    }

    public function getDangxuat()
    {
        Session()->put('email',null);
        Session()->put('makh',null);
        Session()->put('tenkh',null);
        Session()->put('phone',null);
        Session()->put('message',null);


        return Redirect::to('trang-chu');
    }

    public function getThongtin($id_user)
    {
        $cate_product = DB::table('loaisp')->orderby('maloai','desc')->get();
        $brand_product = DB::table('nhasx')->orderby('mansx','desc')->get();
       
        if($id_user)
        {
            return view('pages.thongtin')->with('cate_product',$cate_product)->with('brand_product',$brand_product);
        } 
    
    }

    public function getinfo()

 
    {   	$cate_product = DB::table('loaisanpham')->orderby('maloai','desc')->get();

            $brand_product = DB::table('nhasx')->orderby('mansx','desc')->get();
        return view('pages.info')->with('brand_product',$brand_product)->with('cate_product',$cate_product);
    }
    public function save_info(infocusrequest $request)
{   	  $data = array();
        
        $a=$request->id;
        $data['name']=$request->name;
        $data['password']=($request->password);
        $data['phone']=$request->phone;
        $data['diachi']=$request->address;


        DB::table('khachhang')->where('id',$a)->update($data);

            

        return Redirect::to('getinfo/'.$a);
    }

    // public function getGiohang()
    // {
    //     return view('pages.giohang');   
    // }
}
