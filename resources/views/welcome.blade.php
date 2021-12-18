<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home | SHOP ĐỒ GIA DỤNG</title>


        
        <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
        <link href="{{URL::asset('public/frontend/css/main.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/lightslider.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/prettify.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/lightgallery.min.css')}}" rel="stylesheet">
        

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{('public/frontend/img/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{('public/frontend/img/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{('public/frontend/img/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{('public/frontend/img/apple-touch-icon-57-precomposed.png')}}">
        </head><!--/head-->
        <body>
            
            @include('header')
            
            @include('footer')
            <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
            <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
            <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
            <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
            <script src="{{asset('public/frontend/js/main.js')}}"></script>
            <script src="{{asset('public/frontend/js/lightslider.js')}}"></script>
            <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
            <script src="{{asset('public/frontend/js/lightgallery-all.min.js')}}"></script>
            <script src="{{asset('public/frontend/js/prettify.js')}}"></script>
            <script type="text/javascript">
        //             const ipnElement = document.querySelector('#ipnPassword')
        // const btnElement = document.querySelector('#btnPassword')
        
        // // step 2
        // btnElement.addEventListener('click', function() {
        //   // step 3
        //   const currentType = ipnElement.getAttribute('type')
        //   // step 4
        //   ipnElement.setAttribute(
        //     'type',
        //     currentType === 'password' ? 'text' : 'password'
        //   )
        // })
            // $(document).ready(function(){
            // $('.add-to-cart').click(function(){
            // var id = $(this).data('id_sp');
            // var cart_id = $('.cart_id_' + id).val();
            // var cart_name = $('.cart_name_' + id).val();
            // var cart_image = $('.cart_image_' + id).val();
            // var cart_price = $('.cart_price_' + id).val();
            // var cart_qty = $('.cart_qty_' + id).val();
            // var _token = $('input[name="_token"]').val();
            
            // $.ajax({
            // url: '{{url('/add-cart-ajax')}}',
            // method: 'POST',
            // data:{cart_id:cart_id,cart_name:cart_name,cart_image:cart_image,cart_price:cart_price,cart_qty:cart_qty,_token:_token},
            // success:function(data){
            //     swal({
            //         title: "Đã thêm sản phẩm vào giỏ hàng",
            //         text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
            //         showCancelButton: true,
            //         cancelButtonText: "Xem tiếp",
            //         confirmButtonClass: "btn-success",
            //         confirmButtonText: "Đi đến giỏ hàng",
            //         closeOnConfirm: false
            //     },
            //     function() {
            //         window.location.href = "{{url('/gio-hang')}}";
            //     });

            //     }
            // });
            // });
            // });
            // </script>
            <script type="text/javascript">
            $(document).ready(function() {
    $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:3,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }   
    });  
  });
            </script>
  {{-- <script>
$(document).ready(function(){
    $('#test').on('click',function(e){
      e.preventDefault();
     var id =$('#check').val();
      $.ajax({
          method: "POST",
          url: "/huydon/"+id,
          data: "data",
          dataType: {id},
          success: function (data) 
            {
             
            alert('thanh cong');
           
              
          }
      });
  }

  </script> --}}
        </body>
    </html>