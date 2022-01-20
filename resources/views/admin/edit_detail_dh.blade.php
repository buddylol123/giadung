@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
         Sửa Thông Tin Khách Hàng
                </header>
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
                <div class="panel-body">
                  
                    <div class="position-center">
                        <form role="form"   method="POST" action="{{ URL::to('/save-edit-dh/'.$edit_dh->madh) }}" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" name="add" value="{{ $edit_dh->diachi }}" class="form-control form-control-lg" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại</label>
                            <input  pattern="(0[3|5|7|8|9])+([0-9]{8})" type="tel" name="phone" value="{{ $edit_dh->sodienthoai }}" class="form-control form-control-lg" >
                        </div>
                     
                 
                       
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection