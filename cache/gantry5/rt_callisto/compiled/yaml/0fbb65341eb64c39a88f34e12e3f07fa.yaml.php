<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/templates/rt_callisto/blueprints/styles/header.yaml',
    'modified' => 1452990763,
    'data' => [
        'name' => 'Header Colors',
        'description' => 'Header colors for the Callisto theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ECBC2E'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#B08523'
                ]
            ]
        ]
    ]
];
