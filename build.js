var Metalsmith  = require('metalsmith');
var metadata    = require('metalsmith-metadata');
var sitemap     = require('metalsmith-mapsite');
var lunr        = require('metalsmith-lunr');
var branch      = require('metalsmith-branch');
var each        = require('metalsmith-each');
// HTML
var layouts     = require('metalsmith-layouts');
var drafts      = require('metalsmith-drafts');
var snippet     = require('metalsmith-snippet');
var markdown    = require('metalsmith-markdown');
var permalinks  = require('metalsmith-permalinks');
var collections = require('metalsmith-collections');
var pagination  = require('metalsmith-pagination');
var dateFormat  = require('metalsmith-date-formatter');
// CSS
var sass        = require('metalsmith-sass');
var prefix      = require('metalsmith-autoprefixer');
var bourbon     = require('node-neat').includePaths;
// JS
var uglify     = require('metalsmith-uglify');
// IMAGES
var imagemin   = require('metalsmith-imagemin');

Metalsmith(__dirname)
  .source('_source')
  .destination('build')
  // CSS
  .use(sass({
    includePaths: bourbon,
    outputStyle: 'compressed',
    outputDir: 'css/'
  }))
  .use(prefix())
  // JS
  .use(uglify({
    concat: 'js/main.js',
    removeOriginal: true
    }))
  // IMAGES
  .use(imagemin())
  // HTML
  .use(drafts())
  .use(collections({
    blog: {
      pattern: 'blog/**/*.md',
      sortBy: 'date',
      reverse: true
    },
    store: {
      pattern: 'store/**/*.md'
    },
    pages: {
      pattern: '*.md'
    }
  }))
  // Make blog posts searchable and use the right layout
  .use(branch()
    .pattern('blog/**/*.md')
    .use(each(
      function (file, filename) {
        file.lunr = true;
        file.layout = 'post.jade';
      }
    ))
  )
  // Make store products searchable and use the right layout
  .use(branch()
    .pattern('store/**/*.md')
    .use(each(
      function (file, filename) {
        file.lunr = true;
        file.layout = 'product.jade';
      }
    ))
  )
  .use(metadata({
    site: '_metadata/site.yaml',
    landing: '_metadata/landing.yaml',
  }))
  .use(pagination({
    'collections.blog': {
      perPage: 5,
      layout: 'blog.jade',
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
  .use(snippet({
    maxLength: 140
  }))
  .use(permalinks({
    pattern: ':collection/:title',
    relative: false,
    linksets: [{
      match: { collection: 'pages' },
      pattern: ':title',
    }]
  }))
  .use(dateFormat({
    dates: [
      { key: 'date',
        format: 'MMMM Do[,] YYYY'
      }
    ]
  }))
  .use(lunr({
    fields: {
      date: 1,
      contents: 1,
      title: 5,
      categories: 10,
      tags: 10
    }
  }))
  .use(layouts({
    engine: 'jade',
    directory: '_templates',
    default: 'default.jade',
    pattern: '**/*.html'
  }))
  .use(sitemap('https://phenotonic.com'))
  .build(function(err) {
    if (err) throw err;
  });
