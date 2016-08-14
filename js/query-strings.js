/* global q$$ */

// Add query strings to external links
// @link https://gist.github.com/lowmess/473f4c425b5be8d26e00
// @link http://codepen.io/lowmess/pen/VvLBLR?editors=0010

const addQueryString = function (el, queryString = window.location.hostname) {
  // Check if el is a link
  if (!el.href) {
    console.log(el + ': \n this element is not a link or is missing an href')
    return
  }

  // Check if el is an HTTP request
  if (el.protocol !== 'http:' && el.protocol !== 'https:') {
    console.log(el.href + ': \n this link is not an HTTP request')
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

let links = q$$('a')
let utmString = 'utm_source=phenotonic&utm_medium=referral'

// Add query string to valid links
Array.prototype.forEach.call(links, function (link) {
  addQueryString(link, utmString)
})
