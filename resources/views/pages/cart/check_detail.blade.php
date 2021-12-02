@extends('welcome')
@section('content')
<section id="main-content">
<section class="wrapper">
        <?php $i= 1?>
       <h2>Chi tiết đơn hàng</h2>
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">

    @foreach($dh2 as $a)
    <p>Tên người nhận:{{ $a->tenkh }}</p>
    <p>Địa chỉ:{{ $a->diachi }}</p>
    <p>Số điện thoại:{{ $a->sodienthoai }}</p>
    </div>
@endforeach
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>Số thứ tự</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th style="width:5px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($dh as $d)
          <tr>
            <td>{{ $i++}}</td>
            <td>{{ $d->tensp }}</td>
            <td>{{ $d->soluong }}</td>
            <td>{{ $d->gia }}</td>
          
            <td></td>
           
      
            @endforeach
          
          </tr>
       
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
       
        <div class="col-sm-12 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <table class="table table-condensed total-result">
              
            
                <tr class="shipping-cost">
                    <td>Phí vận chuyển</td>
                    <td>Free</td>										
                </tr>
                <tr>
                    <td>Tổng cộng</td>
                    <td><span>{{ $d->tongtien }}</span></td>
           
            </table>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

</section>
@endsection