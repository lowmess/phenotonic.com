/* global q$ */

// This exists strictly for mobile browsing. When the address bar is removed on scroll, it causes a repaint for all elements with a vh/%-based height.

// Let's attempt to not make window resizing on desktop ugly as shit.
if (window.matchMedia('(max-width: 640px)').matches && q$('.landing')) {
  // Get landing element & it's height
  var landing = q$('.landing')
  var landingHeight = landing.getBoundingClientRect().height

  // Set height based on height on inital load (override 100vh)
  landing.style.height = landingHeight + 1 + 'px'
  landing.style.minHeight = 0
}
