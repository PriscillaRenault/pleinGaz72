let card = document.querySelectorAll('.flipCard')
let frontCard = document.querySelectorAll('.js-front')
let backCard = document.querySelectorAll('.js-back')
let imgBackCard = document.querySelectorAll('.js-palmares')
let imgFrontCard = document.querySelectorAll('.js-profil')

function changeCard(actionEnter, actionExit) {
    for (let i = 0; i < imgFrontCard.length; i++) {
        imgFrontCard[i].addEventListener(actionEnter, () => {
            setTimeout(() => {
                frontCard[i].classList.remove('flipCard__front')
                frontCard[i].classList.add('hidden')
                backCard[i].classList.remove('hidden')
            }, 500)

            imgBackCard[i].addEventListener('click', () => {
                if (imgBackCard[i].classList.contains('zoomed')) {
                    imgBackCard[i].classList.remove('zoomed')
                    card[i].style.width = 'auto'
                } else {
                    imgBackCard[i].classList.add('zoomed')
                    card[i].style.width = '1000px'
                }
            })
        })
        card[i].addEventListener(actionExit, () => {
            setTimeout(() => {
                backCard[i].classList.add('hidden')
                backCard[i].classList.remove('zoomed')
                frontCard[i].classList.add('flipCard__front')
                frontCard[i].classList.remove('hidden')
            }, 500)
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
