<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [
    'desktop' => [
        'title' => 'Desktop',
        'allowedAspectRatios' => [
            '16:9' => [
                'title' => '16:9',
                'value' => 16 / 9
            ],
            '4:3' => [
                'title' => '4:3',
                'value' => 4 / 3
            ],
            '4:5' => [
                'title' => '4:5 (Instagram)',
                'value' => 4 / 5
            ],
            '1:1' => [
                'title' => '1:1',
                'value' => 1 / 1
            ],
            'NaN' => [
                'title' => 'Free',
                'value' => 0.0
            ],
        ],
    ],
    'tablet' => [
        'title' => 'Tablet',
        'allowedAspectRatios' => [
            '16:9' => [
                'title' => '16:9',
                'value' => 16 / 9
            ],
            '4:3' => [
                'title' => '4:3',
                'value' => 4 / 3
            ],
            '4:5' => [
                'title' => '4:5 (Instagram)',
                'value' => 4 / 5
            ],
            '1:1' => [
                'title' => '1:1',
                'value' => 1 / 1
            ],
            'NaN' => [
                'title' => 'Free',
                'value' => 0.0
            ],
        ],
    ],
    'smartphone' => [
        'title' => 'Smartphone',
        'allowedAspectRatios' => [
            '4:3' => [
                'title' => '4:3',
                'value' => 4 / 3
            ],
            '4:5' => [
                'title' => '4:5 (Instagram)',
                'value' => 4 / 5
            ],
            '1:1' => [
                'title' => '1:1',
                'value' => 1 / 1
            ],
            'NaN' => [
                'title' => 'Free',
                'value' => 0.0
            ],
        ],
    ],
];