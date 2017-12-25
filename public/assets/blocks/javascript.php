<!-- ===== JS ===== -->
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<!-- ===== JS Bootstrap ===== -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
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
</script>
<script>
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
</script>

<script>
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
</script>

<script type="text/javascript">
    function searchProduct() {
        document.frm_search.submit();
    }
</script>




<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<link href='files/css/animations-ie-fix.css' rel='stylesheet'>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
