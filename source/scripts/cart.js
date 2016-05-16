/* global q$, q$$, Snipcart */

var cartCount = function () {
  var count = Snipcart.api.getItemsCount()

  q$('.nav__icon--cart').setAttribute('data-snipcart-count', count)
}

// cartCount when cart is loaded
Snipcart.execute('bind', 'cart.ready', function (data) {
  cartCount()
})

// cartCount when item is added
Snipcart.execute('bind', 'item.added', function (item) {
  cartCount()
})

// cartCount when item is removed
Snipcart.execute('bind', 'item.removed', function (item) {
  cartCount()
})

// cartCount after order is done
Snipcart.execute('bind', 'order.completed', function (data) {
  console.log('Order Complete')
  cartCount(true)
})
