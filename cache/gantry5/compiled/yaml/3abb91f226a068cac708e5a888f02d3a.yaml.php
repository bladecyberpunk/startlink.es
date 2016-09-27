<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/media/gantry5/engines/nucleus/particles/menu.yaml',
    'modified' => 1452991372,
    'data' => [
        'name' => 'Menu',
        'description' => 'Gantry menu',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the menu particle.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'GANTRY5_PARTICLE_MENU_INFO'
                ],
                'base' => [
                    'type' => 'input.text',
                    'label' => 'Base Path',
                    'description' => 'Select the base path.',
                    'default' => '/'
                ],
                'menu' => [
                    'type' => 'menu.list',
                    'label' => 'Menu',
                    'description' => 'Select menu to be used with the particle.',
                    'default' => '',
                    'options' => [
                        '' => '-- Select Menu --'
                    ]
                ],
                'startLevel' => [
                    'type' => 'input.text',
                    'label' => 'Start Level',
                    'description' => 'Set the start level of the menu.',
                    'default' => 1
                ],
                'endLevel' => [
                    'type' => 'input.text',
                    'label' => 'Max Levels',
                    'description' => 'Set the maximum number of menu levels to display.',
                    'default' => 0
                ]
            ]
        ]
    ]
];
