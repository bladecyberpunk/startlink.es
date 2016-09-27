<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/templates/rt_callisto/particles/contact.yaml',
    'modified' => 1452990763,
    'data' => [
        'name' => 'Contact',
        'description' => 'Display contact.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable icon menu particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'contactitems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Contact Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'label',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.label' => [
                            'type' => 'input.text',
                            'label' => 'Label'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Value'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
