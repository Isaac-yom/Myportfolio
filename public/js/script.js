// CODE POUR LE PRELOADER
document.addEventListener("DOMContentLoaded", () => {
  const preloader = document.getElementById("preloader");

  setTimeout(() => {
    preloader.classList.add("hidden"); 
  }, 1700);
});

document.querySelectorAll("a").forEach(link => {
  link.addEventListener("click", function(e) {
    const url = this.getAttribute("href"); 

    if (!url || url.startsWith("#") || url.startsWith("javascript:")) return;
    if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
    if (this.target && this.target.toLowerCase() === "_blank") return;

    try {
      const linkUrl = new URL(url, location.href);
      if (linkUrl.origin !== location.origin) return; 
    } catch (error) {
      return;
    }

    e.preventDefault();

    const preloader = document.getElementById("preloader");
    preloader.classList.remove("hidden");

    setTimeout(() => {
      window.location.href = url;
    }, 500);
  });
});


document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});

// SCROLLBAR 

const scrollBtn = document.getElementById('scrollToTop');

window.addEventListener('scroll', function () {
  if (window.scrollY > 200) {
    scrollBtn.classList.add('show');
  } else {
    scrollBtn.classList.remove('show');
  }
});

scrollBtn.addEventListener('click', function (e) {
  e.stopPropagation();
  e.preventDefault();

  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

// MENU BAR

const burger = document.querySelector('#menu-bar');
const ul = document.querySelector('.nav_list');

burger.addEventListener('click', () => {
  burger.classList.toggle('active');
  ul.classList.toggle('active')
});