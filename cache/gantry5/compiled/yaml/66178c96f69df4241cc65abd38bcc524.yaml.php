<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/homepages/9/d609595038/htdocs/startlink.es/templates/rt_callisto/particles/simplecounter.yaml',
    'modified' => 1452990763,
    'data' => [
        'name' => 'Simple Counter',
        'description' => 'Display simple counter.',
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
                'desc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'date' => [
                    'type' => 'input.text',
                    'label' => 'Date',
                    'description' => 'Set the date.',
                    'placeholder' => 'Enter date (1-31)'
                ],
                'month' => [
                    'type' => 'select.selectize',
                    'label' => 'Month',
                    'description' => 'Select the month',
                    'placeholder' => 'Select...',
                    'default' => 0,
                    'options' => [
                        0 => 'January',
                        1 => 'February',
                        2 => 'March',
                        3 => 'April',
                        4 => 'May',
                        5 => 'June',
                        6 => 'July',
                        7 => 'August',
                        8 => 'September',
                        9 => 'October',
                        10 => 'November',
                        11 => 'December'
                    ]
                ],
                'year' => [
                    'type' => 'input.text',
                    'label' => 'Year',
                    'description' => 'Set the year.',
                    'placeholder' => 2020
                ]
            ]
        ]
    ]
];
