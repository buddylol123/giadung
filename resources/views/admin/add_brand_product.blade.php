@extends('admin_layout')
@section('admin_content')
    

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    THÊM NHÀ SẢN XUẤT
                </header>
                <?php
                    $mess =Session::get('message');
                    if($mess)
                    {
                        echo'<span class="text-alert">'.$mess.'</span>';
                        Session::put('message',null);
                    }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form"   method="POST" action="{{ URL::to('/save-brand-product') }}">
                            {{ csrf_field() }}
                        <div class="form-group " >
                            
                            <label for="exampleInputEmail1">Mã nhà sản xuất</label>
                            <input  type="text" name="brand_product_id"class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Mã nhà sản xuất">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên nhà sản xuất</label>
                            <input type="text" name="brand_product_name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Tên nhà sản xuất">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Xuất xứ</label>
                            <input type="text" name="brand_product_source" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Xuất xứ">
                        </div>
                        
                       
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
</div>
@endsection