<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/media/gantry5/engines/nucleus/particles/module.yaml',
    'modified' => 1452991372,
    'data' => [
        'name' => 'Module Instance',
        'description' => 'Display a module instance.',
        'type' => 'position',
        'hidden' => false,
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable module positions.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'To edit the Module please use the <a href="index.php?option=com_modules" target="_blank" data-g-urltemplate="index.php?option=com_modules&view=module&layout=edit&id=#ID#" href="#">Joomla\'s Module Manager <i class="fa fa-fw fa-external-link"></i></a>'
                ],
                'module_id' => [
                    'type' => 'input.text',
                    'label' => 'Module Id',
                    'class' => 'g-urltemplate',
                    'description' => 'Enter module Id.',
                    'overridable' => false
                ],
                'chrome' => [
                    'type' => 'input.text',
                    'label' => 'Chrome',
                    'description' => 'Module chrome.',
                    'placeholder' => 'gantry'
                ]
            ]
        ]
    ]
];
