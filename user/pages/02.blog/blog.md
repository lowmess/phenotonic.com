---
title: Blog
menu: Blog
blog:
    title: 'Adventures in Gardening'
    description: '### The Phenotonic Blog'
child_type: post
taxonomy:
    category:
        - blog
content:
    items: '@self.children'
    order:
        by: date
        dir: desc
    limit: 5
    pagination: true
---

