<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/media/gantry5/engines/nucleus/particles/content.yaml',
    'modified' => 1452989917,
    'data' => [
        'name' => 'Page Content',
        'description' => 'Display the main page content in the layout.',
        'type' => 'system',
        'icon' => 'fa-file-text-o',
        'hidden' => false,
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable page content.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Displays the main page content in your layout.'
                ],
                '_alert' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-warning',
                    'content' => 'This particle is needed to display the main page content, though it may be disabled from a few selected pages like your front page.'
                ]
            ]
        ]
    ]
];
