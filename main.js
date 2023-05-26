var swiper = new Swiper(".bg-slider-thumbs", {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 0,
 
});
var swiper2 = new Swiper(".bg-slider", {
  loop: true,
  spaceBetween: 0,
  thumbs: {
    swiper: swiper,
  },
});

  var btn1 = document.querySelector(".read-btn#btn1");
  var btn2 = document.querySelector(".read-btn#btn2");
  var btn3 = document.querySelector(".read-btn#btn3");

  btn1.addEventListener("click", function() {
    window.open("page1.html", "_blank");
  });

  btn2.addEventListener("click", function() {
    window.open("page2.html", "_blank");
  });

  btn3.addEventListener("click", function() {
    window.open("page3.html", "_blank");
  });