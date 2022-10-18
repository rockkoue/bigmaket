let slider = document.getElementById('slider')

  let btnleft = document.getElementById('btn-left')
  let btnright = document.getElementById('btn-right')

  btnleft.addEventListener('click', function () {
    slider.scrollLeft -= 220;
  })

  btnright.addEventListener('click', function () {
    slider.scrollLeft += 220;
  })


  const maxScrollLeft = slider.scrollWidth - slider.clientWidth;

  //AUTO PLAY THE SLIDER 
  function autoPlay() {
    if (slider.scrollLeft > (maxScrollLeft - 1)) {
      slider.scrollLeft -= maxScrollLeft;
    } else {
      slider.scrollLeft += 1;
    }
  }
  let play = setInterval(autoPlay, 50);

  // PAUSE THE SLIDE ON HOVER
  let thumbnails = document.getElementsByClassName('thumbail');

  for (i = 0; i < thumbnails.length; i++) {

    thumbnails[i].addEventListener('mouseover', function () {
      clearInterval(play);
    });

    thumbnails[i].addEventListener('mouseout', function () {
      return play = setInterval(autoPlay, 50);
    });
  }
