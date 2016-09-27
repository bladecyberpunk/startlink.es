<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/templates/rt_callisto/blueprints/styles/offcanvas.yaml',
    'modified' => 1452990763,
    'data' => [
        'name' => 'Offcanvas Section',
        'description' => 'Paramters for the Off Canvas sidepanel section.',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#1B1B1F'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#FFFFFF'
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'Panel Width',
                    'default' => '17rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)',
                    'append' => [
                        'type' => 'text',
                        'text' => 'rem'
                    ]
                ],
                'toggle-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Toggle Color',
                    'default' => '#FFFFFF'
                ]
            ]
        ]
    ]
];
