const btnMobile = document.getElementById("btn-mobile");

function menuMobile() {
  const navbar = document.getElementById("navbar");
  navbar.classList.toggle("active");
}

btnMobile.addEventListener("click", menuMobile);