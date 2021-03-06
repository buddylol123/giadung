<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset("public/backend/css/bootstrap.min.css")}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset("public/backend/css/style.css")}}" rel='stylesheet' type='text/css' />
<link href="{{asset("public/backend/css/style-responsive.css")}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset("public/backend/css/font.css")}}" type="text/css"/>
<link href="{{asset("public/backend/css/font-awesome.css")}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset("public/backend/css/morris.css")}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset("public/backend/css/monthly.css")}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{asset("public/backend/js/jquery2.0.3.min.js")}}"></script>
<script src="{{asset("public/backend/js/raphael-min.js")}}"></script>
<script src="{{asset("public/backend/js/morris.js")}}"></script>
</head>
<body>

<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{ URL::to('/dashboard') }}" class="logo">
        E-PIE
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
 
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
     
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{URL::to('public/backend/images/'.Auth::user()->hinh)}}">
                <span class="username">
                    {{ Auth::user()->name }}
                </span>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{{URL::to("/editinfo/".Auth::user()->id)}}"><i class=" fa fa-suitcase"></i>C???p nh???t t??i kho???n</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{URL::to("/logout")}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Trang ch???</span>
                    </a>
                </li>
                @role('quanly')
              
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh m???c lo???i s???n ph???m</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to("/add-category-product")}}">Th??m danh m???c</a></li>
                        <li><a href="{{URL::to("/all-category-product")}}">Li???t k?? danh m???c</a></li>
                        
                    </ul>
                </li>
               

                <li class="sub-menu">

				<li class="sub-menu">

                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Nh?? s???n xu???t</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to("/add-brand-product")}}">Th??m th????ng hi???u</a></li>
                        <li><a href="{{URL::to("/all-brand-product")}}">Li???t k?? </a></li>
                        
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>S???n ph???m</span>
                    </a>
                    <ul class="sub">

                        <li><a href="{{URL::to("/add-product")}}">Th??m s???n ph???m</a></li>
                        <li><a href="{{URL::to("/all-product")}}">Li???t k?? </a></li>
                        
                    </ul>
                </li>
               
				<li class="sub-menu">

                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Chi ti???t s???n ph???m</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to("/add-product-detail")}}">Th??m chi ti???t s???n ph???m</a></li>
                        <li><a href="{{URL::to("/all-product-detail")}}">Li???t k??</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-percent"></i>
                        <span>Qu???n l?? khuy???n m??i</span>
                    </a>
                    <ul class="sub">

                        <li><a href="{{URL::to("/add-discount")}}">Th??m ch????ng tr??nh khuy???n m??i</a></li>
                        <li><a href="{{URL::to("/all-discount")}}">Th??m s???n ph???m v??o khuy???n</a></li>
                        
                    </ul>
                </li>
                @endrole
                @role('nhanvien')
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Qu???n L?? ????n H??ng</span>
                    </a>
                    <ul class="sub">

                        <li><a href="{{URL::to("/payment-admin")}}">Li???t k??</a></li>
                        

					
						

                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Qu???n L?? B??nh Lu???n</span>
                    </a>
                    <ul class="sub">

                        <li><a href="{{URL::to("/binh-luan")}}">Li???t k??</a></li>
                        

					
						

                        
                    </ul>
                </li>
               
                @endrole
                @role('admin')

                <li class="sub-menu">

				<li class="sub-menu">

                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Qu???n l?? nh??n vi??n</span>
                    </a>
                    <ul class="sub">

                        <li><a href="{{URL::to("/dangky-nv")}}">T???o t??i kho???n th??nh vi??n</a></li>

						
                        <li><a href="{{URL::to("/danhsach")}}">Danh s??ch th??nh vi??n</a></li>
                        
                    </ul>
                </li>
                @endrole
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    @yield('admin_content')
    </section>

 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>?? C??ng ty th??nh l???p v??o 2021<a href="http://w3layouts.com">E-PIE</a></p>
            </div>
          </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{asset("public/backend/js/bootstrap.js")}}"></script>
<script src="{{asset("public/backend/js/jquery.dcjqaccordion.2.7.js")}}"></script>
<script src="{{asset("public/backend/js/scripts.js")}}"></script>
<script src="{{asset("public/backend/js/jquery.slimscroll.js")}}"></script>
<script src="{{asset("public/backend/js/jquery.nicescroll.js")}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset("public/backend/js/jquery.scrollTo.js")}}"></script>
<!-- morris JavaScript -->
<script type="text/javascript">
 
    function ChangeToSlug()
        {
            var slug;
         
            //L???y text t??? th??? input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //?????i k?? t??? c?? d???u th??nh kh??ng d???u
                slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
                slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
                slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
                slug = slug.replace(/??|???|???|???|???/gi, 'y');
                slug = slug.replace(/??/gi, 'd');
                //X??a c??c k?? t??? ?????t bi???t
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
                slug = slug.replace(/ /gi, "-");
                //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
                //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox c?? id ???slug???
            document.getElementById('convert_slug').value = slug;
        }
         

   
   
</script>
  
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });
       
        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }
        
        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
            
            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });
        
       
    });
    </script>
<!-- calendar -->
    <script type="text/javascript" src="js/monthly.js"></script>
    <script type="text/javascript">
        $(window).load( function() {
            $('#mycalendar').monthly({
                mode: 'event',
                
            });
            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });
        switch(window.location.protocol) {
        case 'http:':
        case 'https:':
        // running on a server, should be good.
        break;
        case 'file:':
        alert('Just a heads-up, events will not work when run locally.');
        }
        });
    </script>

    <script type="text/javascript">
    $(document).ready(function () {
        $(document).on('keyup', '#keyword', function () {
            var keyword = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ URL::to("/search") }}",
                data: { 
                    keyword: keyword
                },
                dataType: "json",
                success: function (response) {
                    $('#list').html(response); 
                    // alert(response);
                },
                error: function(response) { 
         console.log(response);
    }
            });
            
        });
    });
    </script>
    <script>
     $(document).ready(function(){
        function hideMsg(){
        //alert("hi");
            $(".alert-danger").fadeOut();
        }
        setTimeout(hideMsg,10000);
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('keyup', '#kw', function () {
                var keyword = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{ URL::to("/search-dh-admin") }}",
                    data: { 
                        keyword: keyword
                    },
                    dataType: "json",
                    success: function (response) {
                        $('#listadmin').html(response);
                    },
                    error: function(response) { 
                    console.log(response);
            }
                });
                
            });
        });
        </script>
    <!-- //calendar -->
</body>
</html>