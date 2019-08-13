var body = document.querySelector("body");
var modal = document.querySelector(".modal");
var allImg = document.querySelectorAll(".img-modal img");
var modalImg = modal.querySelector(".modal-content");
var caption = modal.querySelector(".caption");
var span = modal.querySelector(".close");

allImg.forEach(function(img) {
    img.onclick = function() {
        modal.classList.toggle("closed");
        modalImg.src = this.src;
        caption.innerHTML = this.alt;
        body.classList.add("modal-shown");
    }
});

span.onclick = function() { 
    modal.classList.toggle("closed");
    body.classList.remove("modal-shown");
}

document.onkeydown = function(event) { 
  if (event.keyCode == 27) { 
    modal.classList.toggle("closed");
    body.classList.remove("modal-shown");
  }
};        
