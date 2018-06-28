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

  $('#edit-field-client-und').change(function() {
    $('#edit-submitted-address').val($('input[id*="thoroughfare"]').val());
  });

  $('input[id*="edit-field-company-name-und-0-value"]').change(function() {
    $('#edit-submitted-name').val($(this).val());
  });

  $('input[id*="edit-field-email-und-0-value"]').change(function() {
    $('#edit-submitted-email').val($(this).val());
  });

  $('input[id*="edit-field-phone-number-und-0-value"]').change(function() {
    $('#edit-submitted-phone').val($(this).val());
  });

  $('input[id*="thoroughfare"]').bind('input', function(){
    $('#edit-submitted-address').val($(this).val());
  });

  $('input[id*="edit-field-client-address-und-0-locality"]').change(function() {
    $('#edit-submitted-city___suburb').val($(this).val());
  });

  $('input[name="field_client_address[und][0][administrative_area]"]').change(function() {
    $('#edit-submitted-state').val($(this).val());
  });

  $('input[id*="edit-field-client-address-und-0-postal-code"]').change(function() {
    $('#edit-submitted-postcode').val($(this).val());
  });

  $('input[id*="edit-field-client-address-und-0-name-line"]').change(function() {
    $('#edit-submitted-contact').val($(this).val());
  });

  $('input[id*="edit-field-machine-model-und-0-value"]').change(function() {
    $('#edit-submitted-machine-model').val($(this).val());
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