
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


$(document).on("click", ".abonnement", function () {
  var ID = $(this).data('id');
  $.ajax({
    type: 'POST',
    url: '_controllers/controllerabonnement.php?function=abonnement',
    data: jQuery.param({ idmagasin: encodeURIComponent(ID) }),
    dataType: 'json',
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    success: function (result) {
      if (result.status == "success") {
        //document.getElementById("formulaireIDuser").reset();
        //Swal("success", result.message, result.status);
        window.alert(result.message);
      } else {
        window.alert(result.message);
        // new swal("", result.message, result.status);
      }
    }
  });


  // or var clickedBtnID = this.id

});


$(document).on("click", ".desabonnement", function () {
  var ID = $(this).data('id');
  $.ajax({
    type: 'POST',
    url: '_controllers/controllerabonnement.php?function=desabonnement',
    data: jQuery.param({ idmagasin: encodeURIComponent(ID) }),
    dataType: 'json',
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    success: function (result) {
      if (result.status == "success") {
        //document.getElementById("formulaireIDuser").reset();
        //Swal("success", result.message, result.status);
        window.alert(result.message);
      } else {
        window.alert(result.message);
        // new swal("", result.message, result.status);
      }
    }
  });


  // or var clickedBtnID = this.id

});
$(document).ready(function () {

  var email = document.querySelector('.user-ancien-email')

  email.addEventListener('keyup', function () {
    let textEntered = email.value;
    var messageElement = document.querySelector("#messager");
    messageElement.innerText = textEntered;

    var button = document.createElement('button');
    button.type = 'button';
    button.innerHTML = 'send code email';
    button.className = 'btn btn-primary';
    button.onclick = function () {
      console.log(email.value)

    };
    messageElement.appendChild(button);
  });


  $('.user-ancien-email').on('keyup change', function () {
    console.log($(this).val());
  })


  // or var clickedBtnID = this.id

});

/**
$('.abonnement').on("click", function () {

  console.log()

  $.ajax({
    type: 'POST',
    url: '_controllers/controllerabonnement.php',
    data: id = 1,
    dataType: 'json',
    processData: false,
    contentType: false,
    success: function (result) {
      //button.text(buttonDefault);

      if (result.status == "success") {
        //document.getElementById("formulaireIDuser").reset();
        //Swal("success", result.message, result.status);
        console.log('ererer')



      } else {
        window.alert(result.message);
        // new swal("", result.message, result.status);
      }
    }
  });
});*/