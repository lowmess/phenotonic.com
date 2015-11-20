<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1447133290,
    'data' => [
        'title' => 'Phenotonic',
        'author' => [
            'name' => 'Alec',
            'email' => 'alec@phenotonic.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author'
        ],
        'metadata' => [
            'description' => 'Phenotonic provides the tools, expertise, and education for gardens of all varieties & gardeners of all skill levels.',
            'keywords' => 'grow, growing, garden, gardening, consulting, consultants, consultant, consult, experts, expert, expertise, mmj, marijuana, vegetable, hydroponic, organic, hydroponics, hydro'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
