@extends('welcome')
@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <h2>Lịch sử đặt hàng</h2>
  <div class="panel panel-default">
    <div class="panel-heading">
  <div>
     <input type="text" id="tkhd" name="tkhd" class="form-control" placeholder="Tra cứu"/>
  </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Số thứ tụ</th>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Tình trạng đơn hàng</th>
            <th style="width:60px;"></th>
          </tr>
        </thead>
        <tbody id="listhd">
            <?php  $i=1; ?>
        @foreach($dh as $d)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $d->madh }}</td>
            <td>{{ $d->ngaydathang }}</td>
            <td>{{ $d->trangthai }}</td>
            <td>
                <a href="{{ URL::to('/check-detail/'.$d->madh) }}" class="active" ui-toggle-class="">
                    <i class="fa fa-eye text-success text-active"></i>
                    
             </tr>
        
          
      
      
          
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
       
        <div class="col-sm-8 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {{-- <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li> --}}
        
            {!!$dh->links()!!}
       
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
@endsection