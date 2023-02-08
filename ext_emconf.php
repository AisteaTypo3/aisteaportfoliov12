<?php

/**
 * Extension Manager/Repository config file for ext "aisteaportfolio".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'aisteaportfolio',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MedartisAg\\Aisteaportfolio\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Yannick Aister',
    'author_email' => 'yannick.aister@aistee.de',
    'author_company' => 'medartis AG',
    'version' => '1.0.0',
];
