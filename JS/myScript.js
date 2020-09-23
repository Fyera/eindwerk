//Get the current year for the copyright
$("#year").text(new Date().getFullYear());

//Hover function for dropdown menu
$(document).ready(function () {
  $(".dropdown, .btn-group").hover(function () {
    var dropdownMenu = $(this).children(".dropdown-menu");
    if (dropdownMenu.is(":visible")) {
      dropdownMenu.parent().toggleClass("open");
    }
  });
});

//Prevent closing from click inside dropdown
// $(document).on("click", ".dropdown-menu", function (e) {
//   e.stopPropagation();
// });

// Make it as accordion for smaller screens
if ($(window).width() < 992) {
  $(".dropdown-menu a").click(function (e) {
    e.preventDefault();
    if ($(this).next(".submenu").length) {
      $(this).next(".submenu").toggle();
    }
    $(".dropdown").on("hide.bs.dropdown", function () {
      $(this).find(".submenu").hide();
    });
  });
}

// Fancybox init
$("a.grouped_elements").fancybox();

$(document).ready(function () {
  /* This is basic - uses default settings */
  $("a#single_image").fancybox();

  /* Using custom settings */
  $("a#inline").fancybox({
    hideOnContentClick: true,
  });

  /* Apply fancybox to multiple items */
  $("a.group").fancybox({
    transitionIn: "elastic",
    transitionOut: "elastic",
    speedIn: 600,
    speedOut: 200,
    overlayShow: false,
  });
});

//Smooth scrolling and fadeOut
$(document).ready(function () {
  /*--Scroll Back to Top Button Show--*/
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn();
    } else {
      $(".back-to-top").fadeOut();
    }
  });

  //Click event scroll to top button jquery
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});
