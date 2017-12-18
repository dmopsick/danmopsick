$(function() {
  initializeToggling();
});

function initializeToggling() {
  $('.about-header').each(function(){
    $(this).click(function() {
      // next() is the .about-text element next to this .question element
      $(this).next().toggle();
    });
  });
}
