$(document).ready(function () {
  $(".like").click(function () {
    $(this).toggleClass("heart")

  });

});





function imageGallery() {
  const highlight = document.querySelector(".block__pic");
  const previews = document.querySelectorAll(".smallxo-images img");

  previews.forEach(preview => {
    preview.addEventListener("click", function (event) {
      const smallSrc = this.src;
      const bigSrc = smallSrc.replace("small", "big");
      previews.forEach(preview => preview.classList.remove("img-thumbnail"));
      highlight.src = bigSrc;
      preview.classList.add("img-thumbnail");
    });
  });
}

imageGallery();





/**
$(document).ready(function () {
    $(".block__pic").imagezoomsl({
        zoomrange: [3, 3]
    });

}); */



/**
window.addEventListener('scroll', function () {
  var header = document.querySelector('.subheadersticky');
  header.classList.toggle("sticky", window.scrollY > +100);
})*/
