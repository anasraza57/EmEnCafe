const navbar = document.querySelector(".navbar");
const topArrow = document.querySelector(".top-arrow-box");
window.onscroll = () => {
  if (window.scrollY > 100) {
    topArrow.classList.remove("d-none");
    navbar.classList.add("nav-active");
  } else {
    navbar.classList.remove("nav-active");
    topArrow.classList.add("d-none");
  }
};