@extends('welcome')
@section('content')
<!--features_items-->

     <div class="features_items"><!--features_items-->
                           
         <h2 class="title text-center">Kết quả tìm kiếm</h2>
            @foreach($search_product as $key => $product)
            @if($product->soluongsp>0)   
                <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a  href="{{URL::to('/chitietsanpham/'.$product->mactsp)}}">
                                            
                                                @foreach($hinh as $a)
                                                @if($a->mactsp==$product->mactsp)
                                            <img width="200px" height="200px" src="{{URL::to('public/frontend/img/'.$a->hinh)}}" alt="" />
                                            @endif
                                            @endforeach
                                            <h2>{{number_format($product->gia).' '.'VNĐ'}}</h2>
                                        @foreach ($product_km as $a )
                                        @if($a->masp == $product->masp && $time <= $a->ngaykt && $time >=$a->ngaybd)
                                        <h4 style="color:teal">Giá sốc: {{number_format($a->giagiam).''.'VNĐ'}}</h3>
                                            
                                        
                                        @endif
                                        @endforeach
                                            
                                        
                                            <p>{{$product->tensp}}</p>
                                            <?php
                                            $cus = Session()->get('makh');
                                            if($cus)
                                            {
                                            ?>
                                            <form action="{{URL::to('/save-cart')}}" method="post">
                                                {{ csrf_field() }}
                                                <input name="sl" type="hidden" min="1" value="1" />
                                                <input name="productid_hidden" type="hidden" value="{{$product->masp}}" />
                                                <input name="mau" type="hidden" value="{{$product->mausac}}" />
                                                                
                                                                <button type="Submit" class="btn btn-fefault cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                Add to cart
                                                            </button>
                                            </form>
                                            <?php
                                            }else {
                                            ?>
                                                <a href="{{URL::to('/dangnhap')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </a>
                                            <?php 
                                            }
                                            ?>
                                
                                    </div>
                                    @foreach ($product_km as $a )
                                        @if($a->masp == $product->masp && $time <= $a->ngaykt && $time >=$a->ngaybd)
                                    
                                        <img width="20%" src="{{URL::to('public/frontend/img/sale.png')}}" class="new" alt="">
                                        
                                        @endif
                                        @endforeach
                                    
                                </div>
                                
                            </div>
                        </div>
      @endif
         @endforeach
        </div>
@endsection