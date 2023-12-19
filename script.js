const openBurger = document.getElementById('js-Open')
const closeBurger = document.getElementById('js-Close')
const menuList = document.getElementById('js-menuList')

openBurger.addEventListener('click', () => {
  closeBurger.classList.remove('inactive')
  menuList.classList.remove('inactive')
  openBurger.classList.add('inactive')
})

closeBurger.addEventListener('click', () => {
  closeBurger.classList.add('inactive')
  menuList.classList.add('inactive')
  openBurger.classList.remove('inactive')
})
