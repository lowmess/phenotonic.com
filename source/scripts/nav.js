/* global q$, q$$, Snipcart */

var menuButton = q$('.nav__icon--menu')
var navLinks = q$('.nav__container--links')

menuButton.addEventListener('click', function () {
  navLinks.classList.toggle('nav__container--open')
}, false)

var cartCount = function () {
  var count = Snipcart.api.getItemsCount()

  q$('.nav__icon--cart').setAttribute('data-snipcart-count', count)
}

// cartCount when cart is loaded
Snipcart.subscribe('cart.ready', cartCount())

// cartCount when item is added
Snipcart.subscribe('item.added', cartCount())

// cartCount when item is removed
Snipcart.subscribe('item.removed', cartCount())

// cartCount after order is done
Snipcart.subscribe('order.completed', function (data) {
  console.log('Order Complete')
  cartCount()
})
