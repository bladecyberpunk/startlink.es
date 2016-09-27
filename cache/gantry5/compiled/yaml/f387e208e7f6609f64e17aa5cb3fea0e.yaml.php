<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/media/gantry5/engines/nucleus/particles/assets.yaml',
    'modified' => 1452991372,
    'data' => [
        'name' => 'Custom CSS / JS',
        'description' => 'Configure custom CSS and Javascript.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable CSS/JS particles.',
                    'default' => false
                ],
                'css' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'CSS',
                    'description' => 'Add remove or modify custom CSS assets.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text',
                            'label' => 'Name',
                            'skip' => true
                        ],
                        '.location' => [
                            'type' => 'input.text',
                            'label' => 'File Location'
                        ],
                        '.extra' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Tag attributes',
                            'exclude' => [
                                0 => 'rel',
                                1 => 'href',
                                2 => 'type'
                            ]
                        ]
                    ]
                ],
                'javascript' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Javascript',
                    'description' => 'Add remove or modify custom Javascript assets.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text',
                            'label' => 'Name',
                            'skip' => true
                        ],
                        '.location' => [
                            'type' => 'input.text',
                            'label' => 'File Location'
                        ],
                        '.extra' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Tag attributes',
                            'exclude' => [
                                0 => 'src',
                                1 => 'type'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
