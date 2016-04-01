var cartLink = function (remove) {
  if (remove === null || remove === undefined) {
    remove = false
  }

  var count = Snipcart.api.getItemsCount()
  var snipLinks = $$('.nav__snipcart')

  // only cartLink if there's stuff in the cart
  if (count !== null && count !== undefined && count > 0) {
    var items = Snipcart.api.getItems()
    var subtotal = 0
    // set subtotal
    for (var i = 0; i < items.length; i++) {
      var item = items[i]
      var price = item.price
      var quantity = item.quantity
      subtotal += price * quantity
    }

    // Attempt to get items previously created with cartLink
    var checkoutLink = $('.nav__subtotal')
    // If subtotal link exists, update price, else create nodes
    if (checkoutLink) {
      checkoutLink.innerHTML = '$' + subtotal

      console.log('Subtotal updated to $' + subtotal)
    } else {
      var links = $('.nav__links')
      var pipe = document.createElement('li')
      var checkout = document.createElement('li')

      pipe.classList.add('nav__snipcart')
      pipe.innerHTML = '|'
      links.appendChild(pipe)

      checkout.classList.add('nav__snipcart')
      checkout.innerHTML = '<a href="#" class="snipcart-checkout nav__subtotal">$' + subtotal + '</a>'
      links.appendChild(checkout)

      console.log('Checkout link created. Subtotal is $' + subtotal)
    }
  }

  if ((count === null || count === undefined || count <= 0) && snipLinks.length > 0) {
    remove = true
  }

  if (remove) {
    // delete snipcart info if they exist and cart is empty
    for (i = 0; i < snipLinks.length; i++) {
      var snipLink = snipLinks[i]
      snipLink.parentNode.removeChild(snipLink)
    }

    console.log('Checkout link removed')
  }
}

// cartLink when cart is loaded
Snipcart.execute('bind', 'cart.ready', function (data) {
  cartLink()
})

// cartLink when item is added
Snipcart.execute('bind', 'item.added', function (item) {
  cartLink()
})

// cartLink when item is removed
Snipcart.execute('bind', 'item.removed', function (item) {
  cartLink()
})

// cartLink after order is done
Snipcart.execute('bind', 'order.completed', function (data) {
  console.log('Order Complete')
  cartLink(true)
})
