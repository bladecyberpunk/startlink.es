<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/templates/rt_callisto/blueprints/styles/extension.yaml',
    'modified' => 1452990763,
    'data' => [
        'name' => 'Extension Colors',
        'description' => 'Extension colors for the Callisto theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#1A1A1A'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#878787'
                ]
            ]
        ]
    ]
];
