const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // Enable autoplay with interval of 2 seconds
  autoplay: {
    delay: 3000,
  },
});

// Start autoplay
swiper.autoplay.start();
const hamburger = document.querySelector(".hamburger");
const navbar = document.querySelector(".nav-bar");

hamburger.addEventListener("click", function () {
  navbar.classList.toggle("active");
});
//JS NYA
