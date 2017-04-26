console.log("hooking up document ready");
$(document).ready(function() {
  console.log("hooking up hamburger menu");
  $('.nav-trigger').on('click', function() {
    $('.bar').toggleClass('animate');
  })
});
