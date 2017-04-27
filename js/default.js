console.log("hooking up document ready");
$(document).ready(function() {
  console.log("hooking up hamburger menu");
  $('.nav-trigger').on('click', function() {
    $('.bar').toggleClass('animate');
    if($(".wrapper").hasClass('is-open')){
      $(".wrapper").removeClass("is-open");
    } else {
      $(".wrapper").addClass("is-open");
    }
  })
});
