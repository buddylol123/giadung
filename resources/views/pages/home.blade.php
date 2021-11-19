@extends('welcome')
@section('content')
<div class="features_items"><!--features_items-->
<h2 class="title text-center">Sản phẩm mới</h2>
@foreach($all_product as $key => $product)
<div class="col-sm-4">
	<div class="product-image-wrapper">
		<div class="single-products">
			<div class="productinfo text-center">
					<a  href="{{URL::to('/chitietsanpham/'.$product->mactsp)}}">
						
					<img width=200px" height="200px" src="{{URL::to('public/frontend/img/'.$product->hinh)}}" alt="" />
			
					<h2>{{number_format($product->gia).' '.'VNĐ'}}</h2>
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


<!--features_items-->



@endsection