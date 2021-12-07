@extends('welcome')
@section('content')


				
<div class="features_items"><!--features_items-->
	

	
	<h2 class="title text-center">Sản phẩm đang khuyến mãi</h2>
	
	<div class="col-sm-4">
	
	<div class="product-image-wrapper">
	
		<div class="single-products">
			<div class="productinfo text-center">
				@foreach($product_km as $key => $product)
				@if($time < $product->ngaykt)
					<a  href="{{URL::to('/chitietsanpham/'.$product->mactsp)}}">
					<img width="200px" height="200px" src="{{URL::to('public/frontend/img/'.$product->hinh)}}" alt="" />
			
					<h2>{{number_format($product->gia).' '.'VNĐ'}}</h2>
				
					<h4 style="color: red"><s>{{number_format($product->giagiam).' '.'VNĐ'}}</s></h3>
				
					<p>{{$product->tensp}}</p>
					<?php
					$cus = Session()->get('makh');
					if($cus)
					{
					?>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</a>
					<?php
					}else {
					?>
						<a href="{{URL::to('/dangnhap')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</a>
					<?php 
					}
					?>
@endif
@endforeach
			</div>

		</div>
	
	</div>
	
</div>





</div>

<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Sản phẩm mới</h2>
	@foreach($all_product as $key => $product)
	<div class="col-sm-4">
	<div class="product-image-wrapper">
		<div class="single-products">
			<div class="productinfo text-center">
					<a  href="{{URL::to('/chitietsanpham/'.$product->mactsp)}}">
						
					<img width="200px" height="200px" src="{{URL::to('public/frontend/img/'.$product->hinh)}}" alt="" />
			
					<h2>{{number_format($product->gia).' '.'VNĐ'}}</h2>
				@foreach ($product_km as $a )
				@if($a->masp == $product->masp && $time < $a->ngaykt)
				<h4 style="color: red"><s>{{number_format($a->giagiam).' '.'VNĐ'}}</s></h3>
					{{ $time }}
					{{ $a->ngaykt }}
					@endif
				@endforeach
					
				
					<p>{{$product->tensp}}</p>
					<?php
					$cus = Session()->get('makh');
					if($cus)
					{
					?>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</a>
					<?php
					}else {
					?>
						<a href="{{URL::to('/dangnhap')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</a>
					<?php 
					}
					?>

			</div>
		</div>
	</div>
</div>
@endforeach



</div>
<!--features_items-->




@endsection