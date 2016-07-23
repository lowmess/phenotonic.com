var fs = require('fs')
var globcat = require('globcat')
var uglify = require('uglify-js')

fs.mkdirSync('_build/js')

var js = globcat('js/**/*.js')

js.then(function (contents) {
  if (process.env.NODE_ENV === 'production') {
    var result = uglify.minify([contents], { fromString: true })
    fs.writeFileSync('_build/js/main.js', result.code, 'utf-8')
  } else {
    fs.writeFileSync('_build/js/main.js', contents, 'utf-8')
  }
  console.log('JS compiled!')
})

js.catch(function (err) {
  console.log(err)
})
