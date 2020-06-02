// Função para mudança de páginas no site

function sobre(){
    window.location.href = "https://localhost/cardealership/sobre.html";
}

function home(){
    window.location.href = "https://localhost/cardealership/index.html";
}

function contato(){
    window.location.href = "https://localhost/cardealership/contato.html";
}

function estoque(){
    window.location.href = "https://localhost/cardealership/estoque.html";
}



// funcao para fazer a galeria funcionar

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
  ga('send', 'event', 'galeria', 'next_prev', 'Titulo da página');
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}