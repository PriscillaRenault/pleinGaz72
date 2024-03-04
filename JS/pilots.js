let card = document.querySelectorAll('.flipCard')
let frontCard = document.querySelectorAll('.js-front')
let backCard = document.querySelectorAll('.js-back')

function changeCard(actionEnter, actionExit) {
    for (let i = 0; i < card.length; i++) {
        card[i].addEventListener(actionEnter, () => {
            frontCard[i].classList.remove('flipCard__front')
            frontCard[i].classList.add('hidden')
            backCard[i].classList.remove('hidden')
            backCard[i].addEventListener('click', () => {
                if (backCard[i].classList.contains('zoomed')) {
                    backCard[i].classList.remove('zoomed')
                } else {
                    backCard[i].classList.add('zoomed')
                }
            })
        })
        card[i].addEventListener(actionExit, () => {
            backCard[i].classList.add('hidden')
            backCard[i].classList.remove('zoomed')
            frontCard[i].classList.add('flipCard__front')
            frontCard[i].classList.remove('hidden')
        })
    }
}

function zoom() {
    backCard.addEventListener('click', () => {
        backCard.classList.add('zoomed')
    })
}

if (window.screen.width <= 768) {
    changeCard('click', 'click')
} else {
    changeCard('mouseenter', 'mouseleave')
}

changeCard()
