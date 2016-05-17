/* global q$, q$$ */

var menuButton = q$('.nav__icon--menu')
var navLinks = q$('.nav__container--links')

menuButton.addEventListener('click', function () {
  navLinks.classList.toggle('nav__container--open')
}, false)
