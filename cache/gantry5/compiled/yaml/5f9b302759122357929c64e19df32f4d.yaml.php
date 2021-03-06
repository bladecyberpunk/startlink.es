<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/templates/rt_callisto/blueprints/styles/menu.yaml',
    'modified' => 1452990763,
    'data' => [
        'name' => 'Menu',
        'description' => 'Set menu style configuration options.',
        'type' => 'configuration',
        'form' => [
            'fields' => [
                'col-width' => [
                    'type' => 'input.text',
                    'label' => 'Dropdown Width',
                    'description' => 'Specify the width of menu dropdowns in standard mode, does not apply to full width.',
                    'default' => '180px',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)',
                    'append' => [
                        'type' => 'text',
                        'text' => 'px'
                    ]
                ]
            ]
        ]
    ]
];
