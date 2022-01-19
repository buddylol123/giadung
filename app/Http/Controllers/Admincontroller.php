<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Validator;
use Session;
use Spatie\Permission\Traits\HasRoles;
use Hash;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\infocusrequest;
session_start();
class Admincontroller extends Controller
{   
    
    public function index()
     { 
        //  $role = Role::create(['name' => 'admin']);
       
        //  $permission = Permission::create(['name' => 'add']);
        // $user =Auth::user();
        // // // $user->givePermissionTo('view');
        // // $user->assignRole('quanly');
        // $user->syncRoles('admin');
    
        return view('admin_login');
    }
    public function all_nv()
    {   
        
        $user = User::with('roles','permissions')->orderBy('id','DESC')->get();
        $manager_nv = view('admin.all_nvien')->with('all_nv',$user);

        return view ('admin_layout')->with('admin.all_nvien',$manager_nv);
      
    }
    
    public function Postlogin(Request $request)
    {  
        //dd($re->all());
        
        $email = $request['email'];
        $matkhau = $request['password'];
        // dd($request->all());
       //lay gioi han 1 user
    

       
    
    if(Auth::attempt(['email' => $email, 'password' => $matkhau]))
    {   

        // return Redirect::to('/dashboard');
        // auth()->user()->assignRole('nhanvien');
        // dd(auth()->user());
        // auth()->assignRole('nhanvien');
      
        return Redirect::to('/dashboard');

    }
    else
    {  
        return Redirect::to('/admin');
    }
    


        // else
        // {
        //     $a=Auth::user('admin');
        //     echo'<pre>';
        //     print_r($a);
        //     echo'</pre>';
        // }

    }
    
    
       
     

      
    

   

    public function dash()
    {   $sum_product=DB::table('chitietsp')->sum('soluongsp');
        $sp_ban_chay=DB::table('chitietdh')->selectRaw('chitietsp.soluongsp,chitietdh.masp,sanpham.tensp,sum(chitietdh.soluong) as a')
        ->join('sanpham','sanpham.masp','=','chitietdh.masp')
        ->join('chitietsp','chitietsp.masp','=','sanpham.masp')
        ->join('donhang','donhang.madh','=','chitietdh.madh')
        ->orderBy('chitietdh.masp','desc') ->where('donhang.trangthai','Đã giao')->groupBy('chitietdh.masp')->get();
        // dd($sp_ban_chay);
        $doanh_thu = DB::table('donhang')->where('trangthai','Đã giao')
        ->join('chitietdh','donhang.madh','=','chitietdh.madh')
        ->sum('gia');
        $kh = DB::table('khachhang')->count();
        $dh_chuaxl = DB::table('donhang')->where('trangthai','Đang chờ xử lý')->count();
        return view('admin.dashboard')
        ->with('sp_ban_chay',$sp_ban_chay)
        ->with('sum_product',$sum_product)
        ->with('dt',$doanh_thu)
        ->with('dh',$dh_chuaxl)
        ->with('kh',$kh);
    }

   
    public function dang_ky_nv()
    {
        return view ('admin.dang_ky');
    }
    

      
    

    public function save_dk(Request $request)
    {
        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=bcrypt($request->password);
        $data['phone']=$request->sdth;
        $data['diachi']=$request->diachi;
        $data['ngaysinh']=$request->ngaysinh;
    
       
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        DB::table('admin')->insert($data);
        return Redirect::to('/dangky-nv');
    }



    public function phan_quyen($id)
    {      $user = User::find($id);
    
     
        $role = DB::table('roles')->orderBy('id','DESC')->get();
    
        $manager_nv= view('admin.phanquyen')->with('role',$role)->with('user',$user);;
       

        return view ('admin_layout')->with('admin.phanquyen',$manager_nv);
       
    }
    public function save_quyen(Request $request,$id)
    {
        $data= $request->all();
        $user = User::find($id);
        //$user = Auth::();
        $user->syncRoles($data['role']);
        return Redirect::to('/danhsach');
       
    }
    public function edit_info()
    {
        return view('admin.edit_acc');
    }
    public function update_acc(Request $request)
    {
        $data = array();
        $id_user = Auth::user()->id;
        $data['name']=$request->name;
        // $data['password']=bcrypt($request->password);
        $data['phone']=$request->phone;
        $data['diachi']=$request->address;
        $data['ngaysinh']=$request->date;
        $get_img = $request->file('img');
     
        if($get_img!='')
        {   $get_name_img = $get_img->getClientOriginalExtension();
            $name_img = current(explode('.',$get_name_img));
            $new_img = $name_img.rand(0,99).'.'.$get_name_img;
            $get_img->move('public/backend/images',$new_img);
            $data['hinh'] = $new_img;
            DB::table('admin')->where('id',$id_user)->update($data);
            Session()->put('message','Thay đổi thành công');
            return Redirect::to('editinfo/'.$id_user);
        }
        $data['hinh']='NULL';
        DB::table('admin')->where('id',$id_user)->update($data);
        return Redirect::to('editinfo/'.$id_user);
    }
    public function logout()
    {
     Auth::logout();


        return Redirect::to('admin');

        return Redirect::to('trangchu');

    }
}
