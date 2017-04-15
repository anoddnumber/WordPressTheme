console.log("hooking up document ready");
$(document).ready(function() {
  console.log("hooking up hamburger menu");
  $('.sidr-left-link').on('click', function() {
    $('.bar').toggleClass('animate');
  })
});
