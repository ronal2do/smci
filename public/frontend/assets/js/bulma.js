jQuery(document).ready(function ($) {

  var $toggle = $('#header-toggle');
  var $menu = $('#header-menu');

  $toggle.click(function() {
    $(this).toggleClass('is-active');
    $menu.toggleClass('is-active');
  });

  $('.modal-button').click(function() {
    var target = $(this).data('target');
    $('html').addClass('has-modal-open');
    $(target).addClass('is-active');
  });

  $('.modal-background, .modal-close').click(function() {
    $('html').removeClass('has-modal-open');
    $(this).parent().removeClass('is-active');
  });

  var $highlights = $('.highlight');

  $highlights.each(function() {
    var copy = '<button class="copy">Copy</button>';
    $(this).append(copy);
  });

  var $copies = $('.highlight .copy');

  $copies.hover(function() {
    $(this).parent().css('box-shadow', '0 0 0 1px #ed6c63');
  }, function() {
    $(this).parent().css('box-shadow', 'none');
  });

  new Clipboard('.copy', {
    target: function(trigger) {
      return trigger.previousSibling;
    }
  });

});