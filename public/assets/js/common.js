/*
 * ---------------------------------------------------
 * 1. Slide Carousel
 * 2. Scroll to Top
 * 3. Sticky Menu
 * 4. Accordion has icon
 * 5. Hover tag a show ul page Product
 * 6. POPUP order a product - check on info Payment
 * 7. Scroll News Item Tablet & Mobile
 */

  (function($){
    "use strict";
  /* ==================================================== */



  /*
   * 2. Scroll to Top
  */
 /* $(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {
      $('#return-to-top').addClass('td-scroll-up-visible');
    } else {
      $('#return-to-top').removeClass('td-scroll-up-visible');
    }
  });
  $('#return-to-top').click(function() {
    $('body,html').animate({
      scrollTop : 0
    }, 'slow');
  });*/

  /*
   * 3. Sticky Menu
  */
  // $('.fixed').sticky({ topSpacing: 0 });

  /*
   * 7. Main Menu
  */
  $(".navbar-toggle").on( 'click', function() {
    $( this ).toggleClass('has-open');
    $("header .menu").toggleClass("has-open");
    $("body").toggleClass("menu-open");
  });

  /*
   * 7. Main Menu
  */
  $(document).ready(function(){
    $('.menu ul li.parent').append('<span class="plus"></span>');
    $('.menu ul li.parent .plus').click(function(){
      $(this).toggleClass('open').siblings('.submenu').slideToggle();
    });
  });

})(jQuery); // End of use strict