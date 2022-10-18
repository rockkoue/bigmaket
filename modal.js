let modal = document.getElementById("modal-r-t")
  let btn = document.getElementById("btn")
  let closebtn = document.getElementsByClassName("close-btn")[0];

  btn.onclick = function(){
    modal.classList.add("show");
  }
  closebtn.onclick = function(){
    modal.classList.remove("show");
  }