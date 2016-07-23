// Metalsmith
var Metalsmith = require('metalsmith')
var sitemap = require('metalsmith-mapsite')
var feed = require('metalsmith-feed')
var defaultValues = require('metalsmith-default-values')
// HTML
var layouts = require('metalsmith-layouts')
var drafts = require('metalsmith-drafts')
var markdown = require('metalsmith-markdown')
var permalinks = require('metalsmith-permalinks')
var collections = require('metalsmith-collections')
var pagination = require('metalsmith-pagination')
var tags = require('metalsmith-tags')
var minify = require('metalsmith-html-minifier')

var siteBuild = Metalsmith(__dirname)
  .source('source')
  .destination('_build')
  .metadata({
    site: {
      url: 'https://www.phenotonic.com/',
      title: 'Phenotonic',
      description: 'Phenotonic provides the tools, expertise, and education for gardens of all varieties & gardeners of all skill levels.',
      keywords: 'grow, growing, garden, gardening, consulting, consultants, consultant, consult, experts, expert, expertise, mmj, marijuana, vegetable, hydroponic, organic, hydroponics, hydro',
      snipcart: {
        key: 'NmNhYWY2MGYtZTljYi00YzE4LThlNjktNGRhMGE2OTM2ZjAx',
        testKey: 'OTMzNjYxMTUtYmVmZS00MDhjLTgwODMtMzU2NWYwNzg1MDkx'
      }
    }
  })
  // HTML
  .use(drafts())
  .use(collections({
    blog: {
      pattern: 'blog/**/*.md',
      sortBy: 'date',
      reverse: true
    },
    products: {
      pattern: 'products/**/*.md',
      sortBy: 'position',
      reverse: true
    },
    pages: {
      pattern: '*.md'
    }
  }))
  // Set default values
  .use(defaultValues([
    {
      pattern: 'products/**/*.md',
      defaults: {
        layout: 'product.pug'
      }
    },
    {
      pattern: 'blog/**/*.md',
      defaults: {
        layout: 'post.pug'
      }
    }
  ]))
  .use(pagination({
    'collections.blog': {
      perPage: 10,
      layout: 'blog.pug',
      first: 'blog/index.html',
      noPageOne: true,
      path: 'blog/page/:num/index.html',
      pageMetadata: {
        title: 'Blog',
        headline: 'Adventures in Gardening',
        description: 'The Phenotonic Blog'
      }
    }
  }))
  .use(markdown({
    gfm: true,
    smartypants: true,
    tables: true
  }))
  .use(permalinks({
    pattern: ':collection/:title',
    relative: false,
    linksets: [{
      match: { collection: 'pages' },
      pattern: ':title'
    }]
  }))
  .use(tags({
    handle: 'tags',
    path: 'tagged/:tag/index.html',
    pathPage: 'tagged/:tag/:num/index.html',
    perPage: 10,
    layout: 'tag.pug',
    sortBy: 'date',
    reverse: true
  }))
  /*
  .use(tags({
    handle: 'categories',
    path:'products/categories/:tag/index.html',
    layout: 'products.pug'
  }))
  */
  .use(tags({
    handle: 'manufacturer',
    path: 'products/manufacturer/:tag/index.html',
    layout: 'manufacturer.pug'
  }))
  .use(layouts({
    engine: 'pug',
    pretty: true,
    moment: require('moment'),
    directory: 'templates',
    default: 'default.pug',
    pattern: '**/*.html'
  }))
  .use(sitemap('https://phenotonic.com'))
  .use(feed({collection: 'blog'}))

if (process.env.NODE_ENV === 'production') {
  siteBuild.use(minify())
}

siteBuild.build(function (err) {
  if (err) {
    console.log(err)
  } else {
    console.log('Site build complete!')
  }
})
