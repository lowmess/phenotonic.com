/* global q$, Snipcart */

const menuButton = q$('.nav__icon--menu')
const navLinks = q$('.nav__container--links')

menuButton.addEventListener('click', function () {
  navLinks.classList.toggle('nav__container--open')
}, false)

// Add item count next to cart icon
function cartCount () {
  let count = Snipcart.api.getItemsCount()

  q$('.nav__icon--cart').setAttribute('data-snipcart-count', count)
}

// cartCount when cart is loaded
Snipcart.subscribe('cart.ready', function () {
  cartCount()
})

// cartCount when item is added
Snipcart.subscribe('item.added', function () {
  cartCount()
})

// cartCount when item is removed
Snipcart.subscribe('item.removed', function () {
  cartCount()
})

// cartCount after order is done
Snipcart.subscribe('order.completed', function (data) {
  console.log('Order Complete')
  cartCount()
})
