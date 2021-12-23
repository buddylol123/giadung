@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
    
        <div class="col-sm-4">
            <div class="signup-form">
                <!--sign up form-->
               <h3>Cập nhật thông tin</h3>
               @if(count($errors)>0)
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $err)
                           <li>
                               {!!$err  !!}
                           </li>
                       @endforeach
                   </ul>
               </div>
           @endif
           <?php 
                        $id = Session()->get('makh');
           ?>
                <form action="{{URL::to('/save-info')}}" method="POST" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <input type="hidden" value="<?php echo $id ?>" class="form-control" name="id" placeholder="Tên">
 
                    </div>
                    <div>
                        <input type="text" value="<?php echo $info->name ?>" class="form-control" name="name" placeholder="Tên">
 
                    </div>
                    <div>
                        <input type="email" value="<?php echo $info->email ?>" readonly name="email" placeholder="Email"/>
                    </div>
                    <div>
                        <input type="text" value="<?php echo $info->diachi ?>"class="form-control"name="address"placeholder="Địa chỉ"/>
                    </div>
                    <input type="tel" name="phone" value="<?php echo $info->phone?>" placeholder="Số điện thoại" pattern="(0[3|5|7|8|9])+([0-9]{8})"/>
                    {{-- <div class="form-group" >
                        <input type="password" name="password"class="form-control" id="ipnPassword" placeholder="Nhập Mật khẩu"> --}}
                        {{-- <button style="background: #FE980F;
                        border: medium none;
                        border-radius: 0;
                        margin-left: -5px;
                        margin-top: -3px; padding: 7px 17px ;" class="btn btn-danger fomr" type="button" id="btnPassword"> --}}
                            {{-- <i  class="fa fa-eye"></i> --}}
                          {{-- </button> --}}
                        
                        
                        
                    {{-- </div>
                 
                    <div>
                        <input type="password" name="re_password" placeholder="Nhập lại Mật khẩu"/>
                    </div> --}}
                <div>
                    <button type="submit" class="btn btn-default">Submit</button>
                 
                </div>
                <div>
                    <a>Thay Đổi Mật Khẩu</a>
                </div>
              
                </form>
            </div><!--/sign up form-->
        </div>
    </div>
</div>
@endsection 
@section('script')

@endsection