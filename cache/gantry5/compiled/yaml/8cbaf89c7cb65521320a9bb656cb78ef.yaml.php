<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-admin://blueprints/layout/block.yaml',
    'modified' => 1452991372,
    'data' => [
        'name' => 'Block',
        'description' => 'Layout block.',
        'type' => 'block',
        'form' => [
            'fields' => [
                'id' => [
                    'type' => 'input.text',
                    'label' => 'CSS ID',
                    'description' => 'Enter CSS id.',
                    'default' => NULL
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Enter CSS class names.',
                    'default' => NULL
                ],
                'variations' => [
                    'type' => 'input.block-variations',
                    'label' => 'Variations',
                    'description' => 'Enter Theme Variations.',
                    'default' => NULL
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ],
                'size' => [
                    'type' => 'input.text',
                    'label' => 'Block Size',
                    'description' => 'Block size in percentages (5-100).',
                    'append' => [
                        'type' => 'text',
                        'text' => '%'
                    ]
                ]
            ]
        ]
    ]
];
