<!DOCTYPE html>
<!-- saved from url=(0027)# -->
<html lang="vi">
   <head>
      <title>@yield('title')</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
       <meta http-equiv="content-language" content="vi"/>
       <meta name="description" content="@yield('site_description')"/>
       <meta name="keywords" content="@yield('site_keywords')"/>
       <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
       <meta name="google-site-verification" content="IFz-d9V8jZLB1iDG8BfKsKwhPB-FkpsacHLqk5Mpyzk" />
       <meta name="wot-verification" content=""/>
       <meta property="article:author" content="https://www.facebook.com/thanhphuthinhland"/>
       <link rel="shortcut icon" href="@yield('favicon')" type="image/x-icon"/>
       <link rel="canonical" href="{{ url()->current() }}"/>        
       <meta property="og:locale" content="vi_VN" />
       <meta property="og:type" content="website" />
       <meta property="og:title" content="@yield('title')" />
       <meta property="og:description" content="@yield('site_description')" />
       <meta property="og:url" content="{{ url()->current() }}" />
       <meta property="og:site_name" content="thanhphuthinhland.vn" />
       <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
       <meta property="og:image" content="{{ Helper::showImage($socialImage) }}" />
       <meta name="csrf-token" content="{{ csrf_token() }}" />
       <meta name="twitter:card" content="summary" />
       <meta name="twitter:description" content="@yield('site_description')" />
       <meta name="twitter:title" content="@yield('title')" /> 
       <meta name="norton-safeweb-site-verification" content="" />       
       <meta name="wot-verification" content=""/>
       <meta name="twitter:image" content="{{ Helper::showImage($socialImage) }}" />
      <link rel="icon" href="{{ URL::asset('public/assets/images/favicon.ico') }}" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/files/css/index.css') }}">
      <style>        
         #bttop {
         background: url(images/top.png) no-repeat;
         width: 46px;
         height: 46px;
         position: fixed;
         bottom: 2px;
         right: 2px;
         cursor: pointer;
         display: none;
         }
         .container {
         overflow: unset !important;
         }
      </style>
      <!-- ===== Responsive CSS ===== -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/files/css/responsive.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('public/assets/js/bootstrap/bootstrap.min.css') }}" >      
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/files/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/swal.min.css') }}">
      <script src="{{ URL::asset('public/assets/js/jquery.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <!-- ===== JS Bootstrap ===== -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <link href='files/css/animations-ie-fix.css' rel='stylesheet'>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="{{ URL::asset('public/assets/js/home.js') }}"></script>
      <script src="{{ URL::asset('public/assets/js/swal.min.js') }}"></script>
       @yield('css_page')
   </head>
   <body>
	<div>
		Test
	</div>
   </body>
</html>