$('.footer__copyright-year').innerHTML = new Date().getFullYear()

// Make sure footer always extends to bottom of page
// Not responsive currently (only sets the new height once)
var footer = $('.footer')
var footerHeight = footer.getBoundingClientRect().height
var footerBottom = footer.getBoundingClientRect().bottom
var windowHeight = window.innerHeight

if (footerBottom < windowHeight) {
  footer.style.height = footerHeight + (windowHeight - footerBottom) + 1 + 'px'
}
