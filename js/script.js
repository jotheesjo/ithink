$(window).on("load", function () {
  $("#status").fadeOut();
  $("#preloader").delay(300).fadeOut("slow");
  $("body").delay(300).css({ overflow: "visible" });
});

var swiper = new Swiper(".dan-slider-4 .swiper-container", {
  grabCursor: true,
  loop: true,
  spaceBetween: 0,
  slidesPerView: "auto",
  autoplay: {
    delay: 12500,
  },
});
