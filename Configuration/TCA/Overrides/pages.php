<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::registerPageTSConfigFile(
    'sitepackageone',
    'Configuration/TsConfig/Page/config.tsconfig',
    'SitepackageOne Page TsConfig'
);

$newPageColumns = array(
    'style_id' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:style_id',
        'config' => array(
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,alphanum_x,lower,unique'
        ),
    ),
    'style_class' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:style_class',
        'config' => array(
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,alphanum_x,lower'
        ),
    ),
);

ExtensionManagementUtility::addTCAcolumns('pages', $newPageColumns);

$GLOBALS['TCA']['pages']['palettes']['sitepackageone'] = array(
    'canNotCollapse' => 1,
    'showitem' => 'style_id, style_class'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:palettename;sitepackageone,',
    '',
    'after:layout'
);
