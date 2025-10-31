const darkModeBtn = document.getElementById("dark-mode");

//deixa no modo dark
darkModeBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
});
//faz o carrosel andar
const wrapper = document.querySelector(".wrapper");
const carousel = wrapper.querySelector(".carousel");

const arrowIcons = wrapper.querySelectorAll("i");
//faz as imagens avançarem em espaços de 16pixeis
let cardWidth = carousel.querySelector(".card").offsetWidth + 16;
//comando para a seta do carrosell passar as imagens(banner)
arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        carousel.scrollBy({
            left: icon.classList.contains("fa-angle-left") ? -cardWidth : cardWidth,
            behavior: "smooth"
        });
    });
});


//pagina de cadastro
//funcao para ocultar parte da pagina
function nextStep() {
    document.getElementById("step1").classList.remove("active");
    document.getElementById("step2").classList.add("active");
}

//funcao para o botao de menu responsivo
const divContainer = document.querySelector('#navitem');
let isClicked = true;

let showOrHide = function () {
    if (isClicked) {

        divContainer.style.display = 'flex';
        isClicked = false;
    } else {

        divContainer.style.display = 'none';
        isClicked = true;
    }
}





