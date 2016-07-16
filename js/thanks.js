/* global q$ */

var query = (window.location.search === '?thanks') ? true : false

if (query && q$('.contact--contact')) {
  var contact = q$('.contact--contact')

  var h2 = document.createElement('h2')
  h2.innerHTML = 'Thanks!'
  contact.insertBefore(h2, form)

  var p = document.createElement('p')
  p.innerHTML = "We'll be getting back to you shortly. In the meantime, please enjoy this gif of an otter playing a keyboard."
  contact.insertBefore(p, form)

  var img = document.createElement('img')
  img.src = '/images/contact.thanks.gif'
  img.alt = 'Just playing my keyboard, nbd.'
  img.classList.add('is-full-width')
  contact.insertBefore(img, form)

  var hr = document.createElement('hr')
  contact.insertBefore(hr, form)
}

if (query && q$('.contact--services')) {
  var contact = q$('.contact--services')

  contact.removeChild(q$('.contact__form'))
  q$('.contact__tagline').innerHTML = 'Thanks!'

  var img = document.createElement('img')
  img.src = '/images/services.thanks.gif'
  img.alt = 'Us, rushing back to our keyboards.'
  img.classList.add('is-full-width')
  contact.appendChild(img)

  var p = document.createElement('p')
  p.innerHTML = 'We&rsquo;re rushing to get back to you. Hang tight, and we&rsquo;ll get back to you soon!</p><p>Need to fill out another form? No problem, just <a href="/services#contact">click here</a>.'
  contact.appendChild(p)
}
