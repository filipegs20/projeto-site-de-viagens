
function openModal() {

const button = document.querySelector("#botao-open")
const modal = document.querySelector("#popup-cards")
const buttonClose = document.querySelector("#close")

button.addEventListener("click", function () {
    modal.showModal();
})

buttonClose.addEventListener("click", function () {
    modal.close();
})
}

function openModalEdit() {

    const button = document.querySelector("#botao-open2")
    const modal = document.querySelector("#popup-cards2")
    const buttonClose = document.querySelector("#close2")
    
    button.addEventListener("click", function () {
        modal.showModal();
    })
    
    buttonClose.addEventListener("click", function () {
        modal.close();
    })
}