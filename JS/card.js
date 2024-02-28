const cardWrapper = document.querySelectorAll('.js-card')
const flipCards = document.querySelectorAll('.js-flipCard')

let frontButton = ''
let backButton = ''

for (let i = 0; i < cardWrapper.length; i++) {
    frontButton = cardWrapper[i].querySelector('.flipCard--btnTurnBack')
    frontButton.style.visibility = 'visible'
    frontButton.addEventListener('click', () => {
        flipCards[i].classList.toggle('do-flip')
    })
    backButton = cardWrapper[i].querySelector('.flipCard--btnTurnFront')
    backButton.style.visibility = 'visible'
    backButton.addEventListener('click', () => {
        flipCards[i].classList.toggle('do-flip')
    })
}
