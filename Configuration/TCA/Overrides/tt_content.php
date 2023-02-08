<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        'section', // CType
        'Section Container', // label
        'section tag added', // description
        [
            [
                ['name' => 'Section Container', 'colPos' => 81]
            ]
        ] 
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-1col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['section']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';


\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '1col', // CType
        '1 Spalte', // label
        '100%', // description
        [
            [
                ['name' => '1 Spalte', 'colPos' => 101]
            ]
        ] 
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-1col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['1col']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '2cols', // CType
        '2 Spalten', // label
        '50% / 50%', // description
        [
            [
                ['name' => 'Linke Spalte', 'colPos' => 201, 'disallowed' => ['CType' => '2cols, 3cols']],
                ['name' => 'Rechte Spalte', 'colPos' => 202, 'disallowed' => ['CType' => '2cols, 3cols']]
            ]
        ] // grid configuration
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['2cols']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '3cols', // CType
        '3 Spalten', // label
        '33% / 33% / 33%', // description
        [
            [
                ['name' => 'Linke Spalte', 'colPos' => 301, 'disallowed' => ['CType' => '2cols, 3cols']],
                ['name' => 'Mittlere Spalte', 'colPos' => 302, 'disallowed' => ['CType' => '2cols, 3cols']],
                ['name' => 'Rechte Spalte', 'colPos' => 303, 'disallowed' => ['CType' => '2cols, 3cols']]
            ]
        ] // grid configuration
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['3cols']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '4cols', // CType
        '4 Spalten', // label
        '25% / 25% / 25%', // description
        [
            [
                ['name' => 'Linke Spalte', 'colPos' => 401, 'disallowed' => ['CType' => '2cols, 3cols, 4cols']],
                ['name' => 'Mittlere Spalte Links', 'colPos' => 402, 'disallowed' => ['CType' => '2cols, 3cols, 4cols']],
                ['name' => 'Mittlere Spalte Rechts', 'colPos' => 403, 'disallowed' => ['CType' => '2cols, 3cols, 4cols']],
                ['name' => 'Rechte Spalte', 'colPos' => 404, 'disallowed' => ['CType' => '2cols, 3cols, 4cols']]
            ]
        ] // grid configuration
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-4col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['3cols']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        'accordion', // CType
        'Accordeon', // label
        'Akkordeon-Effekt', // description
        [
            [
                ['name' => 'Akkordeon Elemente', 'colPos' => 1001]
            ]
        ] // grid configuration
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['accordion']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

call_user_func(static function () {

    $additionalColumns = [
        'tx_aisteacontent_customcssclass' => [
            'label' => 'custom css class',
            'description' => 'custom CSS classes (separated by space no leading dot)',
            'exclude' => 1,
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ],
                'valuePicker' => [
                    'items' => [
                        ['Hero Slider Section', 'hero-slider'],
                        ['Hero Image Section', 'hero-image'],
                        ['Content Section', 'content'],
                        ['WhiteBG Section', 'whiteBG'],
                        ['Search Section', 'search'],
                        ['Image Banner Section', 'banner'],
                        ['News List Section', 'news-list'],
                        ['News Preview Section', 'news-preview'],
                        ['Zitat Section', 'zitat'],
                        ['Fakten Section', 'facts'],
                        ['Key Figures Section', 'key'],
                        ['Download Prefilter Section', 'dl-pre-filter'],
                        ['Site-Selector Section', 'site-selector'],
                        ['Video Full Screen Section', 'fullscreen-video'],
                        ['Contentbreite Container', 'content-width'],
                        ['Box Slider', 'box-slider'],

                    ],
                ],
            ]
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $additionalColumns
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        '--div--;Extended,tx_aisteacontent_customcssclass'
    );
});