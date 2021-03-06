<!DOCTYPE html>
<!-- saved from url=(0027)# -->
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!--<base href="#">-->
    <base href=".">
    <link href="#images/favi.png" rel="shortcut icon" type="image/x-icon">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="#rss.xml">
    <meta name="geo.position" content="10.819038;106.666897">
    <meta name="geo.placename" content="Hồ Chí Minh - Việt Nam">
    <meta name="geo.region" content="NHÀ ĐẤT CỦ CHI | NHÀ ĐẤT CHÂU CỦ CHI">


    <meta name="google-site-verification" content="r21O7r_Jc343aCNNIN1KINfOQxSg6vujl89DG4sCzd8">
    <!-- Dublin Core-->
    <link rel="schema.DC" href="#">
    <meta name="DC.title" content="NHÀ ĐẤT CỦ CHI | NHÀ ĐẤT CHÂU CỦ CHI">
    <meta name="DC.identifier" content="#">
    <meta name="DC.description" content="">
    <meta name="DC.subject" content="">
    <meta name="DC.language" scheme="ISO639-1" content="en">

    <meta name="keywords"
          content="nhà đất, mua đất củ chi, đất giá rẻ củ chi, đất vườn củ chi, đất nhà xưởng củ chi, mua bán đất củ chi, đất nền củ chi, mua đất ở củ chi, đất nền củ chi gia rẻ. bất động sản củ chi.  ">
    <meta name="description"
          content="Nhà đất Châu Củ Chi Mua Bán Nhà Đất Huyện Củ Chi Với Nhiều Diện Tích, Vị Trí Thuận Lợi, Đầu Tư Sinh Lời Cao. Mọi Người Ai Có Nhu Cầu Xin Liên Hệ:0908.842.039 A Chấu. ">
    <title>NHÀ ĐẤT CỦ CHI | NHÀ ĐẤT CHÂU CỦ CHI </title>
    <style>
        <?php include("files/css/index.css");?>
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
    <link rel="stylesheet" type="text/css" href="files/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="files/css/font-awesome.min.css">

    <link rel="stylesheet" href="js/bootstrap/bootstrap.min.css" >
    <?php include("blocks/javascript.php"); ?>
    <link rel="stylesheet" type="text/css" href="files/style.css">

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
                <a href="#" title=""><img src="images/logo_gd.jpg" alt=""></a>
            </div><!-- /block-log -->
            <div class="block-search col-sm-6 col-xs-7">
               
            </div><!-- /block-search -->
            <div class="block-user col-sm-3 col-xs-12">
                <div class="block-content">
								<span class="ava-img">
									<img alt="" src="images/user.svg">
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
                </div><!-- /popover -->
            </div><!-- /block-user -->
        </div>
        </div>
        </div>
    </div>
    <div class="clear"></div>

    <div class="div_an" style="display: block;"></div>
    <div class="clear"></div>

    <!-- Start menu -->
    <?php include "blocks/menu.php"; ?>
    <!-- End menu -->
    <div class="clear"></div>

    <div id="slider1_container" >
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slide1.png" alt="...">

                </div>
                <div class="item">
                    <img src="images/slide2.jpg" alt="...">

                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="clear"></div>
    <div class="center">
        <div class="right">
            <?php include 'blocks/right.php'?>
        </div>
        <div class="left">
            <?php //include "blocks/content_home.php"; ?>
            <?php //include "page/about.php"; ?>
            <?php //include "page/news.php"; ?>
            <?php //include "page/detail_news.php"; ?>
            <?php //include "page/contact.php"; ?>
            <?php include "page/ky-gui.php"; ?>
        </div>

        <div class="clear"></div>
    </div>
    <div class="clear"></div>

    <!-- Start Footer-->
    <div class="footer">
        <?php include "blocks/footer.php";?>
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
</div><!-- /.modal -->
</body>
</html>