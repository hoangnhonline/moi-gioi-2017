$(document).ready(function(){
  $('a.addcart-link').click(function() {
      var product_id = $(this).data('id');
      add_product_to_cart(product_id);
  });
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); 
});

function add_product_to_cart(product_id) {
$.ajax({
  url: $('#route-add-cart').val(),
  method: "POST",
  data : {
    id: product_id
  },
  success : function(data){
    location.href = $('#route-cart').val();
  },
  error : function(e) {
    
  }
});
}

window.fbAsyncInit = function() {
  FB.init({
    appId      : $('#fb-app-id').val(),
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.7' // use graph api version 2.7
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(document).ready(function() {
  $(document).on('click', '.facebook-login', function() {    
    FB.login(function(response){
      console.log(response.status);
      if(response.status == "connected")
      {
         // call ajax to send data to server and do process login
        var token = response.authResponse.accessToken;
        $.ajax({
          url: $('#route-ajax-login-fb').val(),
          method: "POST",
          data : {
            token : token
          },
          success : function(data){
            //location.reload();
          }
        });

      }
    }, {scope: 'public_profile,email,user_friends,publish_actions'});
  });  
});
$(document).on('keypress', '#popup-login-email, #popup-login-password', function(e){
if(e.keyCode==13){
  $('#login_popup_submit').click();
}
});
$(document).on('keypress', '#popup-register-email, #popup-register-password, #popup-register-name', function(e){
  if(e.keyCode==13){
    $('#register_popup_submit').click();
  }
});
$(document).ready(function () {
  $('#login_popup_submit_1').click(function() {   
        var $form = $(this).parents('form');        
        var error = [];
        var list_check = ['login_email', 'login_password'];
        var login_email    = $form.find('#login_email').val();
        var login_password = $form.find('#login_password').val();
        if(!login_email) {
          error.push('login_email');
        }

        if(!validateEmail(login_email))
        {
          error.push('login_email');
        }

        if(!login_password) {
          error.push('login_password');
        }

        for(i in list_check) {
          $('#'+list_check[i]).parent().removeClass('has-error');
          $('#'+list_check[i]).next().hide();
        }

        if(error.length) {
          for(i in error) {
            $('#'+error[i]).parent().addClass('has-error');
            $('#'+error[i]).next().show();
          }
          return false;
        }

        if(!error.length)
        {
            $.ajax({
              url: $('#route-auth-login-ajax').val(),
              method: "POST",
              data : {
                email: login_email,
                password: login_password
              },
              success : function(data){
               if(data.error == 1)
               {
                  $('#login-form #error_login').html('Email hoặc mật khẩu không đúng.')
               }
               else {
                    window.location.reload();
               }
              }
            });
        }

    });
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#txtNewsletter').bind('keypress', function(e) {
      if(e.keyCode==13){
        $('#btnNewsletter').click();
      }
    });   
    
    $('#btnNewsletter').click(function() {
        var email = $.trim($('#txtNewsletter').val());        
        if(validateEmail(email)) {
            $.ajax({
              url: $('#route-register-newsletter').val(),
              method: "POST",
              data : {
                email: email,
              },
              success : function(data){
                if(+data){
                  swal('', 'Đăng ký nhận bản tin thành công.', 'success');
                }
                else {
                  swal('', 'Địa chỉ email đã được đăng ký trước đó.', 'error');
                }
                $('#txtNewsletter').val("");
              }
            });
        } else {
            swal({ title: '', text: 'Vui lòng nhập địa chỉ email hợp lệ.', type: 'error' });
        }
    });

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    $('#login_popup_submit').click(function() {

        var $form = $(this).parents('form');        
        var error = [];
        var list_check = ['popup-login-email', 'popup-login-password'];
        var login_email    = $form.find('#popup-login-email').val();
        var login_password = $form.find('#popup-login-password').val();
        
        if(!login_email) {
          error.push('popup-login-email');
        }

        if(!validateEmail(login_email))
        {
          error.push('popup-login-email');
        }

        if(!login_password) {
          error.push('popup-login-password');
        }

        for(i in list_check) {
          $('#'+list_check[i]).removeClass('error');          
        }

        if(error.length) {
          for(i in error) {
            $('#'+error[i]).addClass('error');
          }
          return false;
        }

        if(!error.length)
        {
            $.ajax({
              url: $('#route-auth-login-ajax').val(),
              method: "POST",
              data : {
                email: login_email,
                password: login_password
              },
              success : function(data){
               if(data.error == 1)
               {
                  $('#login_popup_form #error_login').html('Email hoặc mật khẩu không đúng.')
               }else{
                location.reload();
               }
              }
            });
        }

    });
    
    $('#register_popup_submit').click(function(){
        var $form = $(this).parents('form');
        var error = [];
        var list_check = ['popup-register-email', 'popup-register-password', 'popup-register-name'];
        var email = $('#popup-register-email').val();
        var password = $('#popup-register-password').val();
        var fullname = $('#popup-register-name').val();

        if(!email) {
          error.push('popup-register-email');
        }
        if(!validateEmail(email))
        {
          error.push('popup-register-email');
        }
        
        if(password.length < 6 || password.length > 32) {
          error.push('popup-register-password');
        }

        if(!fullname) {
          error.push('popup-register-name');
        }

        for(i in list_check) {
          $('#'+list_check[i]).removeClass('error');          
        }

        if(error.length) {
          for(i in error) {
            $('#'+error[i]).addClass('error');
          }
          return false;
        }

        if(!error.length)
        {
            $.ajax({
              url: $('#route-register-customer-ajax').val(),
              method: "POST",
              data : {
                email: email,
                password: password,
                fullname: fullname
              },
              success : function(data){
                if(data.error == 'email')
                {
                    $('small[er=NOT_VALIDATED]').show();
                    $('small[er=notEmpty]').hide();
                }
              }
            });
        }

    });

    /* get product id */
    $('.tham-gia-ban').click(function () {
        var productId = $(this).data('id');
        $('#productIdJoinSale').val(productId);
    });
    $('.tham-gia-ban-detail').click(function () {
        var productId = $(this).data('id');
        $('#productIdJoinSale').val(productId);
    });    
    $('.salesDirect').click(function(){
      $('#div_phone').hide();
      $('#btnReset').click();
      $('.salesDirect').children().attr('checked', 'checked');
    });
    $('.salesPhone').click(function(){
      $('#div_phone').show();
    });
    $('#btnSaveJoinSales').click(function(){
        var error = [];
        var typeSale = $('input[name=typeSales]:checked').val();
        var productId = $('#productIdJoinSale').val();
        console.log(typeSale);
        if(!typeSale) {
            error.push('typeSale');
        }

        if(error.length) {
            for(i in error) {
                $('#'+error[i]).addClass('error');
            }
            return false;
        }
        if(typeSale == 2){
          var err = 0;
          $('#div_phone input, #div_phone select').each(function(){
            if($(this).val() == "" || $(this).val() == 0){
              err++;
            }
          });
          if(err > 0){
            alert('Vui lòng điền đầy đủ các thông tin trên.');
            return false;
          }
        }
        if(!error.length)
        {
            $('#btnSaveJoinSales').prop('disabled', true);
            $.ajax({
                url: $('#route-customer-join-sale-ajax').val(),
                method: "POST",
                data : $('#join_sale_popup_form').serialize(),
                success : function(data){
                    if (data.error == 0){
                        $('#collapseSuccess').removeClass('hide');
                        setTimeout(function(){
                            window.location.reload(1);
                        }, 3000);
                    }else if(data.error == 'dup'){
                      alert('Hệ thống phát hiện lỗi trùng khách.Quý vị có thể xác thực bằng cách gọi cho khách hàng.');
                      $('#btnSaveJoinSales').prop('disabled', false);                      
                    }
                }
            });
        }

    });
    
});
