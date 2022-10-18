
let currentScroPosition = 0;
let scrollAmount = 77;

const sCont = document.querySelector(".storys-container")
const hScroll = document.querySelector(".horizontal-scroll")
const btnScrollLeft = document.querySelector("#btn-scroll-left")
const btnScrollRihgt = document.querySelector("#btn-scroll-right")

btnScrollLeft.style.opacity = "0"

let maxScroll = -sCont.offsetWidht + hScroll.offsetWidht;

function scrollhorizontally(val){
  currentScroPosition += (val * scrollAmount)

  if(currentScroPosition >= 0){
    currentScroPosition = 0
    btnScrollLeft.style.opacity = "0";
  }else{
    btnScrollLeft.style.opacity = "1";
  }

  if(currentScroPosition <= maxScroll){
    currentScroPosition = maxScroll;
    btnScrollRihgt.style.opacity = "0";
  }else{
    btnScrollRihgt.style.opacity = "1";
  }

  sCont.style.left = currentScroPosition +"px"
}





