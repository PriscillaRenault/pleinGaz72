// burger Menu
const openBurger = document.getElementById('js-Open')
const closeBurger = document.getElementById('js-Close')
const menuList = document.getElementById('js-menuList')

//Show Desktop Menu
window.addEventListener('DOMContentLoaded', function () {
  const width = window.innerWidth
  if (width >= 650) {
    menuList.classList.remove('inactive')
    openBurger.classList.add('inactive')
  } else {
    menuList.classList.add('inactive')
    openBurger.classList.remove('inactive')
  }
})

window.addEventListener('resize', function () {
  const width = window.innerWidth
  if (width >= 650) {
    menuList.classList.remove('inactive')
    openBurger.classList.add('inactive')
  } else {
    menuList.classList.add('inactive')
    openBurger.classList.remove('inactive')
  }
})

//open burger Menu
openBurger.addEventListener('click', () => {
  closeBurger.classList.remove('inactive')
  menuList.classList.remove('inactive')
  openBurger.classList.add('inactive')
})

//close burger Menu
closeBurger.addEventListener('click', () => {
  closeBurger.classList.add('inactive')
  menuList.classList.add('inactive')
  openBurger.classList.remove('inactive')
})
