// let parallax = document.getElementById("parallax");
// window.addEventListener("scroll", function(){
//     let y = this.window.scrollY;
//     parallax.style.marginTop = y * 0.7 + "px";
//     // parallax.style.top = y * 0.7 + "px";
// })

const parallax = document.getElementById("parallax");

function setTranslate(xPos, yPos, el) {
 el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";

}
window.addEventListener("DOMContentLoaded", scrollLoop, false);

let xScrollPosition;
let yScrollPosition;

function scrollLoop() {
  xScrollPosition = window.pageXOffset;
  yScrollPosition = window.pageYOffset;
  if (yScrollPosition < 600) {
        setTranslate(0, yScrollPosition * 0.7, parallax);
        requestAnimationFrame(scrollLoop);
  } else {
    requestAnimationFrame(scrollLoop);
  }
}

const navbar = document.querySelector("nav");

  window.addEventListener("scroll", () => {
    if (window.scrollY >= 200) {
      navbar.classList.add("navbar-scrolled");
    } else {
      navbar.classList.remove ("navbar-scrolled");
    }
  });

  function scrollToTop (){
    window.scrollTo(0,0);
  }

  const btnTop = document.getElementById("btn-top") 
  window.addEventListener("scroll", () => {
    if (window.scrollY >= 200) {
      btnTop.style.display = "block";
    } else {
      btnTop.style.display = "none";
    }
  });

  var owl = $('.owl-carousel');
  owl.owlCarousel({
      nav:false,
      dots:true,
      responsive:{
        0:{
          items: 1
        },
        480:{
          items: 2
        },
        769:{
          items: 3
        }
      }
  });

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

  function scrollToTop (){
    window.scrollTo(0,0);
  }

	$(document).on('click','#saiba-mais',function(e){
    window.scrollTo(0,1000);
  })