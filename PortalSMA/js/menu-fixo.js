/*Faz com que o menu seja fixado a partir do momento que ele encontre o topo da página*/
window.onscroll = function() {myFunction(), scrollFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// Quando a página é rolada 100px a partir do topo, exibir o backTop
function scrollFunction() {
    if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
        document.getElementById("backTop").style.display = "block";
    } else {
        document.getElementById("backTop").style.display = "none";
    }
}

// Quando clicar no botão, voltar ao topo da página
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}