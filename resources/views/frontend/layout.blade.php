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

   </head>
   <body>
      <script>
         $(document).ready(function(){
             //$('[data-toggle="popover"]').popover();
             $('.block-user .block-content').popover({
                 placement: top,
                 trigger: 'click',
                 html : true,
                 content: function() {
                     return $('.popover').html();
                 }
             });
         });
         
      </script>
      <div class="container">
         <h1 style="display:none">NHÀ ĐẤT CỦ CHI | NHÀ ĐẤT CHÂU CỦ CHI</h1>
         <div class="header" id="header">
            <div class="header-top">
               <div class="container">
                  <div class="row">
                     <div class="block-logo col-sm-3 col-xs-5">
                        <a href="#" title=""><img src="{{ URL::asset('public/assets/images/logo_gd.jpg') }}" alt=""></a>
                     </div>
                     <!-- /block-log -->
                     <div class="block-search col-sm-6 col-xs-7">
                     </div>
                     <!-- /block-search -->
                     <div class="block-user col-sm-3 col-xs-12">
                        <div class="block-content">
                           <span class="ava-img">
                           <img alt="" src="{{ URL::asset('public/assets/images/user.svg') }}">
                           </span>
                           <div class="ava-info" >
                              <p><strong><a title="Header" data-toggle="popover" data-placement="bottom" data-content="Content222">Đăng nhập, đăng ký</a></strong></p>
                              <p class="small">Tài khoản</p>
                           </div>
                        </div>
                        <div class="popover fade bottom">
                           <div class="arrow"></div>
                           <div class="popover-content">
                              <div class="popover-signin">
                                 <a class="btn btn-block btn-white" href="#" data-toggle="modal" data-target="#login-modal">Đăng nhập</a>
                                 <a class="btn btn-block btn-white" href="#" data-toggle="modal" data-target="#register-modal">Đăng ký tài khoản mới</a>
                                 <a class="btn btn-block login-button-fb btn-social" href="#">Đăng nhập với Facebook</a>
                                 <a class="btn btn-block login-button-google btn-social" href="#">Đăng nhập với Google+</a>
                              </div>
                           </div>
                        </div>
                        <!-- /popover -->
                     </div>
                     <!-- /block-user -->
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="div_an" style="display: block;"></div>
         <div class="clear"></div>
         <!-- Start menu -->
         @include('frontend.partials.menu')
         <!-- End menu -->
         <div class="clear"></div>
         <div id="slider1_container" style="position: relative; width: 1280px; height: 474.426px; overflow: hidden;"
            jssor-slider="true">
            <!-- Loading Screen -->
            <!-- Slides Container -->
            <!-- bullet navigator container -->
            <!-- Bullet Navigator Skin End -->
            <!-- Arrow Right -->
            <div style="position: absolute; top: 0px; left: 0px; width: 1349px; height: 500px; transform-origin: 0px 0px 0px; transform: scale(0.948851);">
               <div class=""
                  style="position: relative; width: 1349px; height: 500px; overflow: visible; display: block; top: 0px; left: 0px;">
                  <div u="loading"
                     style="position: absolute; top: 0px; left: 0px; width: 1349px; height: 500px; display: none;"
                     debug-id="loading-container">
                     <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                     </div>
                     <div style="position: absolute; display: block; background: url({{ URL::asset('public/assets/css/slider_responsive/loading.gif') }}) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;">
                     </div>
                  </div>
                  <div u="slides"
                     style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1349px; height: 500px; z-index: 0; overflow: hidden;">
                     <div debug-id="slide_container"
                        style="position: absolute; z-index: 0; pointer-events: none; left: 0px; top: 0px; display: none;"></div>
                  </div>
                  <div u="slides"
                     style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1349px; height: 500px; overflow: hidden; z-index: 0;"
                     debug-id="slide-board">
                     <div style="width: 1349px; height: 500px; top: 0px; left: 0px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0; display: none;"></div>
                     <div debug-id="slide-0"
                        style="width: 1349px; height: 500px; top: 0px; left: 0px; position: absolute; overflow: hidden;">
                        <a u="image" href="http://datgiarecuchi.com/" target="_blank"
                           style="width: 1349px; height: 500px; top: 0px; left: 0px;"><img
                           src="{{ URL::asset('public/assets/files/374592624762819.jpg') }}" border="0"
                           style="width: 1349px; height: 500px; top: 0px; left: 0px; position: absolute;"></a>
                        <div u="loading"
                           style="position: absolute; top: 0px; left: 0px; width: 1349px; height: 500px; z-index: 1000; display: none;">
                           <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                              background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                           </div>
                           <div style="position: absolute; display: block; background: url({{ URL::asset('public/assets/css/slider_responsive/loading.gif') }}) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;">
                           </div>
                        </div>
                     </div>
                     <div debug-id="slide-1"
                        style="width: 1349px; height: 500px; top: 0px; left: 1349px; position: absolute; overflow: hidden;">
                        <a u="image" href="http://datgiarecuchi.com/" target="_blank"
                           style="width: 1349px; height: 500px; top: 0px; left: 0px;"><img
                           src="{{ URL::asset('public/assets/files/768057908224703.png') }}" border="0"
                           style="width: 1349px; height: 500px; top: 0px; left: 0px; position: absolute;"></a>
                        <div u="loading"
                           style="position: absolute; top: 0px; left: 0px; width: 1349px; height: 500px; z-index: 1000; display: none;">
                           <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                              background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                           </div>
                           <div style="position: absolute; display: block; background: url({{ URL::asset('public/assets/css/slider_responsive/loading.gif') }}) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;">
                           </div>
                        </div>
                     </div>
                     <div debug-id="slide-2"
                        style="width: 1349px; height: 500px; top: 0px; left: -1349px; position: absolute; overflow: hidden;">
                        <a u="image" href="#nhadatchaucuchi.com" target="_blank"
                           style="width: 1349px; height: 500px; top: 0px; left: 0px;"><img
                           src="{{ URL::asset('public/assets/files/975116879698721.jpg') }}" border="0"
                           style="width: 1349px; height: 500px; top: 0px; left: 0px; position: absolute;"></a>
                        <div u="loading"
                           style="position: absolute; top: 0px; left: 0px; width: 1349px; height: 500px; z-index: 1000; display: none;">
                           <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                              background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                           </div>
                           <div style="position: absolute; display: block; background: url({{ URL::asset('public/assets/css/slider_responsive/loading.gif') }}) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;">
                           </div>
                        </div>
                     </div>
                     <div debug-id="slide-3"
                        style="width: 1349px; height: 500px; top: 0px; left: -1349px; position: absolute; overflow: hidden;">
                        <a u="image" href="#nhadatchaucuchi.com" target="_blank"
                           style="width: 1349px; height: 500px; top: 0px; left: 0px;"><img
                           src="{{ URL::asset('public/assets/files/144661499335848.jpg') }}" border="0"
                           style="width: 1349px; height: 500px; top: 0px; left: 0px; position: absolute;"></a>
                        <div u="loading"
                           style="position: absolute; top: 0px; left: 0px; width: 1349px; height: 500px; z-index: 1000; display: none;">
                           <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                              background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                           </div>
                           <div style="position: absolute; display: block; background: url({{ URL::asset('public/assets/css/slider_responsive/loading.gif') }}) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div u="navigator" class="jssorb01"
                     style="position: absolute; bottom: 16px; right: 10px; width: 78px; height: 12px;">
                     <!-- bullet navigator item prototype -->
                     <div u="prototype" style="position: absolute; width: 12px; height: 12px; left: 0px; top: 0px;"
                        class="av"></div>
                     <div u="prototype" style="position: absolute; width: 12px; height: 12px; left: 22px; top: 0px;"
                        class=""></div>
                     <div u="prototype" style="position: absolute; width: 12px; height: 12px; left: 44px; top: 0px;"
                        class=""></div>
                     <div u="prototype" style="position: absolute; width: 12px; height: 12px; left: 66px; top: 0px;"
                        class=""></div>
                  </div>
                  <span u="arrowleft" class="jssora05l"
                     style="width: 62px; height: 85px; top: 225px; left: 8px;"></span><span u="arrowright"
                     class="jssora05r"
                     style="width: 62px; height: 85px; top: 225px; right: 8px"></span>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="center">
            <div class="right">
               @include('frontend.partials.right')
            </div>
            <div class="left">
               @yield('content')
               <?php //include "blocks/content_home.php"; ?>
               <?php //include "page/about.php"; ?>
               <?php //include "page/news.php"; ?>
               <?php //include "page/detail_news.php"; ?>
               <?php //include "page/contact.php"; ?>
            </div>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
         <!-- Start Footer-->
         <div class="footer">
            @include('frontend.partials.footer')
         </div>
         <!-- End footer -->
         <div class="clear"></div>
         <div class="fix_tel">
            <a href="tel:0908.842.039">
               <div class="tel">
                  <p class="fone"><i class="fa fa-phone" aria-hidden="true"></i>0908.842.039</p>
                  <div class="bor-left"></div>
                  <div class="bor-top"></div>
                  <div class="bor-right"></div>
                  <div class="bor-bottom"></div>
               </div>
            </a>
         </div>
      </div>
      <div id="bttop" style="display: block;"></div>
      <div class="modal fade" id="login-modal">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
                  <h3 class="modal-title">Đăng nhập</h3>
               </div>
               <div class="modal-body">
                  <form action="/users/sign_in" method="post">
                     <p class="sub-title">Đăng nhập bằng email</p>
                     <div class="form-control-wrapper">
                        <input class="form-control" id="email" name="user[email]" placeholder="Email" required="true" type="email" value="">
                     </div>
                     <div class="form-control-wrapper">
                        <input class="form-control" id="password" name="user[password]" placeholder="Mật khẩu" required="true" type="password">
                     </div>
                     <div class="form-control-wrapper">
                        <input class="btn btn-login-submit" type="submit" value="Đăng nhập">
                     </div>
                  </form>
                  <p class="forgot-password-link">
                     <a class="btn-link" data-dismiss="modal" data-target="#fogot-password-dialog" data-toggle="modal" href="#" id="forgot-password-button">Quên mật khẩu đăng nhập?</a>
                  </p>
               </div>
               <div class="modal-footer">
                  <div class="forgot-password-link clearfix">
                     <a class="btn btn-link show-social-link" href="#" data-toggle="collapse" data-target=".social-area">
                     Đăng nhập với tài khoản mạng xã hội
                     <span>
                     <i class="fa fa-angle-down"></i>
                     </span>
                     </a>
                     <div class="form-control-wrapper social-area collapse">
                        <div class="row">
                           <div class="col-md-6">
                              <a class="btn-facebook" href="/users/auth/facebook">
                              <i class="left fa fa-facebook"></i>
                              <span class="left">Facebook</span>
                              </a>
                           </div>
                           <div class="col-md-6">
                              <a class="btn-google" href="/users/auth/google_oauth2">
                              <i class="left fa fa-google-plus"></i>
                              <span class="left">Google+</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <p class="bottom-text">
                     Chưa có tài khoản?
                     <a class="btn-link" data-dismiss="modal" data-target="#register-modal" data-toggle="modal" href="#">Đăng ký</a>
                  </p>
               </div>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <div class="modal fade in" id="register-modal">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
                  <h3 class="modal-title">Đăng ký</h3>
               </div>
               <div class="modal-body">
                  <form action="/users" method="post">
                     <p class="sub-title">Đăng ký bằng email</p>
                     <div class="form-control-wrapper">
                        <input class="form-control" id="name" name="user[name]" placeholder="Họ và tên" required="true" type="text" value="">
                     </div>
                     <div class="form-control-wrapper">
                        <input class="form-control" id="email" name="user[email]" placeholder="Email" required="true" type="email" value="">
                     </div>
                     <div class="form-control-wrapper">
                        <input class="form-control" id="password" name="user[password]" placeholder="Mật khẩu" required="true" type="password">
                     </div>
                     <div class="form-control-wrapper">
                        <input class="btn btn-login-submit" type="submit" value="Đăng ký">
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <div class="forgot-password-link clearfix">
                     <a class="btn btn-link show-social-link" href="#" data-toggle="collapse" data-target=".social-area">
                     Đăng nhập với tài khoản mạng xã hội
                     <span>
                     <i class="fa fa-angle-down"></i>
                     </span>
                     </a>
                     <div class="form-control-wrapper social-area collapse">
                        <div class="row">
                           <div class="col-md-6">
                              <a class="btn-facebook" href="/users/auth/facebook">
                              <i class="left fa fa-facebook"></i>
                              <span class="left">Facebook</span>
                              </a>
                           </div>
                           <div class="col-md-6">
                              <a class="btn-google" href="/users/auth/google_oauth2">
                              <i class="left fa fa-google-plus"></i>
                              <span class="left">Google+</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <p class="bottom-text">
                     Đã có tài khoản?
                     <a class="btn-link" data-dismiss="modal" data-target="#login-modal" data-toggle="modal" href="#">Đăng nhập</a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- /.modal -->
<script type="text/javascript">
    $(document).ready(function (e) {
        $(window).scroll(function (e) {
            if ($(this).scrollTop() >= 110) {
                $('.menu').addClass('menu_fix');
                $('.div_an').show();
                $('.menu_desktop').hide();
                $('.menu_chay_fix').show().addClass('menu_fix');
                ;
            } else {
                $('.menu').removeClass('menu_fix');
                $('.div_an').hide();
                $('.menu_desktop').show();
                $('.menu_chay_fix').hide();
            }
        });
        $('.nut_menu111').click(function (e) {
            $('.khung_menu12').slideToggle();
        });
    });
$(document).ready(function (e) {
    $('.menu_1').click(function (e) {
        $('.menu_mobile').show();
    });
    $('.btn_close,.div_dong_menu').click(function (e) {
        $('.menu_mobile').slideUp();
    });
    $('.caret').click(function (e) {
        if ($('.caret').attr('class') == 'caret') {
            $(this).addClass('caret1');
        } else {
            $(this).removeClass('caret1');
        }
        $(this).siblings('ul').slideToggle();
    });
});
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#bttop').fadeIn();
        }
        else {
            $('#bttop').fadeOut();
        }
    });
    $('#bttop').click(function () {
        $('body,html').animate({scrollTop: 0}, 800);
    });
});
function searchProduct() {
   document.frm_search.submit();
}
</script>
   </body>
</html>