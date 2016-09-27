<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/media/gantry5/engines/nucleus/particles/system-messages.yaml',
    'modified' => 1452991372,
    'data' => [
        'name' => 'System Messages',
        'description' => 'Display system messages.',
        'type' => 'pagecontent',
        'hidden' => false,
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable system messages.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Displays system messages in your layout.'
                ],
                '_alert' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-warning',
                    'content' => 'Always include this particle to all of your layouts. Otherwise users will not see important system messages like login failures.'
                ]
            ]
        ]
    ]
];
