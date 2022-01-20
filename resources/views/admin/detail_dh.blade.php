@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  @if(Session('message'))

  <div class="alert alert-danger">
      <ul>
          
              <li>
                {{Session('message')}}
              </li>
         
      </ul>
  </div>

   @endif 
    <div class="panel panel-default">
    <div class="panel-heading">
    Chi tiết đơn hàng
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
          
              </label>
            </th>
            <th ><a class="text-danger">Sản phẩm</a></th>
            <th><a class="text-danger">Số lượng</a></th>
            <th><a class="text-danger">Giá</a></th>
            <th><a class="text-danger">Trạng thái</a></th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>

          <?php $i=0?>
        @foreach($dh as $key => $d)
        <tbody>
          <tr>
            
            <td>
              <?php 
              $i++;
              echo $i;
              ?>
            </td>
            <td>{{ $d->tensp }} ({{ $d->mausac }})</td>
            <td>{{ $d->soluong }}</td>
            <td>{{ $d->ngaydathang }}</td>
           
            <td>
            {{ $d->trangthai }}
            </td>
        
            <td>
          
           <?php
                if($d->trangthai=='Hủy đơn')
                {
                }else if($d->trangthai=='Đã giao')
                {
                
                }else{
           ?>
             
                    <a href="{{URL::to('/status/'.$d->madh)}}" class="btn btn-primary">Thay đổi trạng thái</a>
            
                <?php
                } 
                ?>   
       
    
        
            
            </td>
               @endforeach
         
          </tr>
      
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
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
                      @foreach($dh as $key => $c)
                      @if($loop->first)
                      <td><span>{{ $c->tongtien }}</span></td>
                      @endif
                    @endforeach
              </table>
            </ul>
          </div>
        </div>
           
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
    
</div>
<div class="table-agile-info">
    <div class="panel panel-default">
    <div class="panel-heading">
Thông tin người nhận
    </div>

    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              
              </label>
            </th>
            <th ><a class="text-danger">Tên khách hàng</a></th>
            <th><a class="text-danger">Địa chỉ</a></th>
            <th><a class="text-danger">Số điện thoại</a></th>
            <th><a class="text-danger">Ghi chú</a></th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        @foreach($dh1 as $key => $d)
        <tbody>
          <tr>
            
            <td></td>
            <td>{{ $d->tenkh }}</td>
            <td>{{ $d->diachi }}</td>
            <td>{{ $d->sodienthoai }}</td>
            <td>{{ $d->ghichu }}</td>
            <td></td>
            <td>
              <?php
              if($d->trangthai=='Hủy đơn')
              {
              }else if($d->trangthai=='Đã giao')
              {
              
              }else{
         ?>
            <a href="{{URL::to('/edit-detail-dh/'.$d->madh)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil text-info text-active"></i></a>
          
              <?php
              } 
              ?>   
     
  
      
             
            </td>
         
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
           
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
    
</div>
@endsection