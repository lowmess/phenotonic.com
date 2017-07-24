/* global q$ */

var menuButton = q$('.nav__icon--menu')
var navLinks = q$('.nav__container--links')

menuButton.addEventListener('click', function () {
  navLinks.classList.toggle('nav__container--open')
}, false)

// Add item count next to cart icon
// Random cart count
var random = function (min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min)
}
q$('.nav__icon--cart').setAttribute('data-snipcart-count', random(0, 9))
