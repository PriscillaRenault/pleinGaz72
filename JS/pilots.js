let card = document.querySelectorAll('.flipCard')
let frontCard = document.querySelectorAll('.js-front')
let backCard = document.querySelectorAll('.js-back')

function changeCard() {
    for (let i = 0; i < card.length; i++) {
        card[i].addEventListener('mouseenter', (event) => {
            backCard[i].classList.remove('hidden')
            frontCard[i].classList.remove('flipCard__front')
            frontCard[i].classList.add('hidden')
            console.log(frontCard[i])
        })
        card[i].addEventListener('mouseleave', (event) => {
            backCard[i].classList.add('hidden')
            frontCard[i].classList.add('flipCard__front')
            frontCard[i].classList.remove('hidden')
        })
    }
}

changeCard()
