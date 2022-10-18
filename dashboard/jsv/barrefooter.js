window.addEventListener('scroll', function () {
    var header = document.querySelector('.capou');
    header.classList.toggle("sticky", window.scrollY > 0);
  })