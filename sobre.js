const darkModeBtn = document.getElementById("dark-mode");

//deixa no modo dark
darkModeBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
});


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