<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cookie List',
    'description' => 'Display a list of cookies used by a website',
    'category' => 'fe',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'state' => 'stable',
    'version' => '1.0.0-dev',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-0.0.0',
            'typo3' => '10.4.11-10.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
