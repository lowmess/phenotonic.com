var Metalsmith = require('metalsmith')
var markdown = require('metalsmith-markdown')
var sitemap = require('metalsmith-mapsite')
var layouts = require('metalsmith-layouts')
var minify = require('metalsmith-html-minifier')

/* Metalsmith
 ******************************************************************************/

var siteBuild = Metalsmith(__dirname)
  .source('source')
  .destination('_build')
  .metadata({
    site: {
      url: 'https://www.phenotonic.com/',
      title: 'Phenotonic',
      description: 'Phenotonic used to provide the tools, expertise, and education for gardens of all varieties & gardeners of all skill levels. Now it mostly just sits on the couch and drinks beer.'
    }
  })
  .use(markdown())
  .use(layouts({
    engine: 'pug',
    pretty: true,
    directory: 'templates',
    default: 'default.pug',
    pattern: '**/*.html'
  }))
  .use(minify())
  .use(sitemap('https://phenotonic.com'))

siteBuild.build(function (err) {
  if (err) {
    console.log(err)
  } else {
    console.log('Metalsmith complete!\n')
  }
})
