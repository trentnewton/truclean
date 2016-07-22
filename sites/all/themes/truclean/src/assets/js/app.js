(function($) {

  'use strict';

  // initiate foundation

  $(document).foundation();

  // scroll to sections

  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  $(document).ready(function(){

    // expanding search bar

    var submitIcon = $('.search-box-icon');
    var inputBox = $('.search-box-input');
    var searchBox = $('.search-box');
    var isOpen = false;
    submitIcon.click(function(){
      if(isOpen === false){
        searchBox.addClass('search-box-open');
        inputBox.focus();
        isOpen = true;
      } else {
        searchBox.removeClass('search-box-open');
        inputBox.focusout();
        isOpen = false;
      }
    });
    submitIcon.mouseup(function(){
      return false;
    });
    searchBox.mouseup(function(){
      return false;
    });
    $(document).mouseup(function(){
      if(isOpen === true){
        $('.search-box-icon').css('display','block');
        submitIcon.click();
      }
    });
  });

  // function buttonUp(){
  //   var inputVal = $('.search-box-input').val();
  //   inputVal = $.trim(inputVal).length;
  //   if( inputVal !== 0){
  //     $('.search-box-icon').css('display','none');
  //   } else {
  //     $('.search-box-input').val('');
  //     $('.search-box-icon').css('display','block');
  //   }
  // }

  // wrap tables with overflow auto

  $('table').wrap('<div class="overflow-auto" />');

  // hide maps overlay when clicked gay

  $('.google-map-overlay').on('click', function() {
    $(this).toggleClass('hide');
    return false;
  });

})(jQuery);