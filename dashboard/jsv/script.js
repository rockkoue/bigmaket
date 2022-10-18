
$('.owl-carousel').owlCarousel({
  autoplay: true,
  autoplayhoverpause: true,
  autoplaytimeout: 100,
  items: 4,
  nav: true,
  loop: true,
  responsive: {
    0: {
      items: 1,
      dots: false
    },
    485: {
      items: 2,
      dots: false
    },
    728: {
      items: 3,
      dots: false
    },
    960: {
      items: 4,
      dots: false
    },
    120: {
      items: 2,
      dots: true
    }
  }

});


///////////////////////////////////pop///////////////////////////////////////////////////////

const popupScreen = document.querySelector(".popup-screen");
const popupBox = document.querySelector(".popup-box");
const closeBtn = document.querySelector(".close-btn");

window.addEventListener("load", () => {
  setTimeout(() => {
    popupScreen.classList.add("active");
  }, 1000);
});

closeBtn.addEventListener("click", () => {
  popupScreen.classList.remove("active");

  document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60;
});

const WebsiteCookie = document.cookie.indexOf("WebsiteName=");

if (WebsiteCookie != -1) {
  popupScreen.style.display = "none";
}
else {
  popupScreen.style.display = "flex";
}
