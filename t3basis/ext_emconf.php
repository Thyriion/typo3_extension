<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3 Basis',
    'description' => 'T3 Basis',
    'category' => 'templates',
    'author' => 'Kevin Schüler',
    'author_email' => 'kevinschueler2000@gmail.com',
    'author_company' => '',
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.99.99',
            'fluid_styled_content' => '12.0.0-12.99.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];