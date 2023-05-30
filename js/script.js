const toggleMenu = document.querySelector(".toggle__menu");
const headerNav = document.querySelector(".header__nav ul");
const arJAY = document.querySelector(".arjay");
toggleMenu.addEventListener("click", () => {
  toggleMenu.classList.toggle("open");
  headerNav.classList.toggle("open");
  headerNav.style = "z-index:999";
  headerNav.style = "transition:.5s ease";
  arJAY.classList.toggle("show");
});

const search = document.querySelector(".search");
const searchField = document.querySelector(".searchField");

search.addEventListener("click", () => {
  search.classList.toggle("open");
  searchField.classList.toggle("open");
});
