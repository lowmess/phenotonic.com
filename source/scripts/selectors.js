// Returns an individual node (first node that querySelector matches)
// @link https://gist.github.com/lowmess/9cf8b203c6507ba05e15

function $ ( node ) {
  return document.querySelector(node);
}
// Returns a node list
function $$ ( nodeList ) {
  return document.querySelectorAll(nodeList);
}
