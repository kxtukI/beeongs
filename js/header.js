const btnMobile = document.getElementById("btn-mobile");

function menuMobile() {
  const navbar = document.getElementById("navbar");
  navbar.classList.toggle("active");
}

btnMobile.addEventListener("click", menuMobile);

function toggleD(){
var dropdown = document.getElementById("dropdown-section");

  if(dropdown.style.display == 'block')
      dropdown.style.display = 'none';
       else
      dropdown.style.display = 'block';
      
window.onclick = function(t) {
  if (event.target == dropdown) {
    dropdown.style.display = "none";
  }
}}