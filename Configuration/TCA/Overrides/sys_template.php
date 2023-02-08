<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('aisteaportfolio', 'Configuration/TypoScript/', 'TYPO3 11 Extension Template');
