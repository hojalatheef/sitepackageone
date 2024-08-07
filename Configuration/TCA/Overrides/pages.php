<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function () {
    ExtensionManagementUtility::registerPageTSConfigFile(
        'sitepackageone',
        'Configuration/TsConfig/Page/config.tsconfig',
        'SitepackageOne Page TsConfig'
    );

    $newPageColumns = [
        'style_id' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:style_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,alphanum_x,lower,unique',
            ],
        ],
        'style_class' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:style_class',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,alphanum_x,lower',
            ],
        ],
    ];

    ExtensionManagementUtility::addTCAcolumns('pages', $newPageColumns);

    $GLOBALS['TCA']['pages']['palettes']['sitepackageone'] = [
        'canNotCollapse' => 1,
        'showitem' => 'style_id, style_class',
    ];

    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--palette--;LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:palettename;sitepackageone,',
        '',
        'after:layout'
    );

    // SAME as registered in ext_tables.php
    $sectionDocType = 369;
    $sectionDocTypeIconClass = 'tx-sitepackageone-page-section';

    // Add the new doktype to the page type selector
    ExtensionManagementUtility::addTcaSelectItem(
        'pages',
        'doktype',
        [
            'label' => 'LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:section_page_type',
            'value' => $sectionDocType,
            'icon' => $sectionDocTypeIconClass,
            'group' => 'special',
        ],
    );
    // Add the icon to the icon class configuration
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes'][$sectionDocType] = $sectionDocTypeIconClass;
})();
