// let parallax = document.getElementById("parallax");
// window.addEventListener("scroll", function(){
//     let y = this.window.scrollY;
//     parallax.style.marginTop = y * 0.7 + "px";
//     // parallax.style.top = y * 0.7 + "px";
// })

const parallax = document.getElementById("parallax");

function setTranslate(xPos, yPos, el) {
<<<<<<< HEAD
  el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
=======
 el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
>>>>>>> d7106f6f74bbd1989e4fe8af903b2e87ff144773

}
window.addEventListener("DOMContentLoaded", scrollLoop, false);

let xScrollPosition;
let yScrollPosition;

function scrollLoop() {
  xScrollPosition = window.pageXOffset;
  yScrollPosition = window.pageYOffset;
  if (yScrollPosition < 600) {
<<<<<<< HEAD
    setTranslate(0, yScrollPosition * 0.7, parallax);
    requestAnimationFrame(scrollLoop);
=======
        setTranslate(0, yScrollPosition * 0.7, parallax);
        requestAnimationFrame(scrollLoop);
>>>>>>> d7106f6f74bbd1989e4fe8af903b2e87ff144773
  } else {
    requestAnimationFrame(scrollLoop);
  }

}

const navbar = document.querySelector("nav");

<<<<<<< HEAD
window.addEventListener("scroll", () => {
  if (window.scrollY >= 200) {
    navbar.classList.add("navbar-scrolled");
  } else {
    navbar.classList.remove("navbar-scrolled");
  }
});

function scrollToTop() {
  window.scrollTo(0, 0);
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
  center: true,
  loop: true,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  nav: true,
  dots: false,
  margin: 300,
  responsiveClass: true,
  responsive: {
    480: {
      items: 1,
    },
    960: {
      items: 4,
    },
    1920: {
      items: 7,
    }
  }
});

const btnMobile = document.getElementById("btn-mobile");

function menuMobile() {
  const navbar = document.getElementById("navbar");
  navbar.classList.toggle("active");
}

btnMobile.addEventListener("click", menuMobile);
=======
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
    center:true,
    loop:true,
    autoplay: true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    nav:true,
    dots:false,
    margin:10,
    responsiveClass:true,
    responsive:{
        480:{
            items:1,
        },
        960:{
            items:3,
        },
        1920:{
            items:5,
        }
    }
});

>>>>>>> d7106f6f74bbd1989e4fe8af903b2e87ff144773
