const menuList = document.querySelector('.js-menuList')
const burgerOpen = document.querySelector('.fa-bars')
const burgerClose = document.querySelector('.fa-xmark')
function showMenu() {
    if (window.innerWidth <= 650) {
        if (menuList.style.display === 'block') {
            menuList.style.display = 'none'
            burgerOpen.style.display = 'block'
            burgerClose.style.display = 'none'
        } else {
            menuList.style.display = 'block'
            burgerOpen.style.display = 'none'
            burgerClose.style.display = 'block'
        }
    } else {
        menuList.style.display = 'flex'
        burgerOpen.style.display = 'none'
        burgerClose.style.display = 'none'
    }
}
function windowResize() {
    showMenu()
}

burgerOpen.addEventListener('click', showMenu)
burgerClose.addEventListener('click', showMenu)

window.addEventListener('resize', windowResize)
