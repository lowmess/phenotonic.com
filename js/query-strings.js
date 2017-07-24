/* global q$$ */

// Add query strings to external links
// @link https://gist.github.com/lowmess/473f4c425b5be8d26e00
// @link http://codepen.io/lowmess/pen/VvLBLR?editors=0010

var addQueryString = function (el, queryString) {
  // Check if el is a link
  if (!el.href) {
    // console.log(el + ': \n this element is not a link or is missing an href')
    return
  }

  // Check if el is an HTTP request
  if (el.protocol !== 'http:' && el.protocol !== 'https:') {
    // console.log(el.href + ': \n this link is not an HTTP request')
    return
  }

  // Check if link host does not match current window host
  if (el.host !== window.location.host) {
    // If link already has a query string add to it, else create one
    if (el.search) {
      el.search += '&' + queryString
    } else {
      el.search = queryString
    }
  }
}

var links = q$$('a')
var utmString = 'utm_source=phenotonic&utm_medium=referral'

// Add query string to valid links
for (var i = 0; i < links.length; i++) addQueryString(links[i], utmString)
