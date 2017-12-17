// Code taken from https://jsfiddle.net/Filo/m7yww8oa/
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
    $(".home-logo").addClass('shrink');
    $(".link-container").addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
    $(".home-logo").removeClass('shrink');
    $(".link-container").removeClass('shrink');
  }
});
