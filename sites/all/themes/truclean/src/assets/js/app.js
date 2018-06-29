import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

// import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
import './lib/foundation-explicit-pieces';


// $(document).foundation();


// initiate foundation

$(document).foundation();

// scroll to sections

$('a[href*=\\#]:not([href=\\#])').click(function () {
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

  // Kitchen Service Report

  // $('#edit-field-client-und').bind('select', function(){

  //   $('#edit-submitted-address').val($('input[id*="thoroughfare"]').val());
  // });

  $('#edit-field-client-und').change(function() {
    $('#edit-submitted-email').attr('value',$('input[id*="edit-field-email"]').attr('value'));
    $('#edit-submitted-name').attr('value',$('input[id*="edit-field-company-name"]').attr('value'));
    $('#edit-submitted-address').attr('value',$('input[id*="thoroughfare"]').attr('value'));
    $('#edit-submitted-city-suburb').attr('value',$('input[id*="edit-field-client-address-und-0-locality"]').attr('value'));
    $('#edit-submitted-state').attr('value',$('select[id*="administrative_area"] option:selected').text());
    $('#edit-submitted-postcode').attr('value',$('input[id*="postal-code"]').attr('value'));
    $('#edit-submitted-phone').attr('value',$('input[id*="edit-field-phone-number"]').attr('value'));
    $('#edit-submitted-contact').attr('value',$('input[id*="edit-field-client-address-und-0-name-line"]').attr('value'));
    $('#edit-submitted-machine-model').attr('value',$('input[id*="edit-field-machine-model"]').attr('value'));
  });

});

// wrap tables with overflow auto

$('table').wrap('<div class="overflow-auto" />');

// hide maps overlay when clicked

$('.google-map-overlay').on('click', function() {
  $(this).toggleClass('hide');
  return false;
});

// adding module attribute to login link

$('#reveal-login').removeAttr('href').attr({'data-open': 'login'});

$('#login').on('click', '.reload-overlay', function() {
  location.reload(true);
});

// reshuffle search results under the search form grid

$('.search-form-inputs').append($('.search-results-list'));

// add closable attribute to messages

$('.messages').attr({'data-closable': 'slide-out-right'});
$('<button class="close-button" aria-label="Dismiss alert" type="button" data-close><span aria-hidden="true">&times;</span></button>').appendTo('.messages');

/**
 * Recaptcha bug fix with ajax rendering form.
 */
Drupal.behaviors.recapcha_ajax_behaviour = {
  attach: function(context, settings) {
    if (typeof grecaptcha != "undefined") {
      var captchas = document.getElementsByClassName('g-recaptcha');
      for (var i = 0; i < captchas.length; i++) {
        var site_key = captchas[i].getAttribute('data-sitekey');
        if (!$(captchas[i]).html()) {
          grecaptcha.render(captchas[i], { 'sitekey' : site_key});
        }
      }
    }
  }
}