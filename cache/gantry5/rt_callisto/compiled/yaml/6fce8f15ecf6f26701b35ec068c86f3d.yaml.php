<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/templates/rt_callisto/particles/infolist.yaml',
    'modified' => 1452990763,
    'data' => [
        'name' => 'Info List',
        'description' => 'Displays Info List',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
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
                'infolists' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Info Lists',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Item Title',
                            'description' => 'Customize the item title text.',
                            'placeholder' => 'Enter item title'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Specify the link address.'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
