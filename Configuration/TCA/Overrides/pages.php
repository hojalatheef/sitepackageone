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
        'label' => 'LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:ww_css_id',
        'config' => array(
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,alphanum_x,lower,unique,required'
        ),
    ),
    'style_class' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:ww_css_class',
        'config' => array(
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,alphanum_x,lower,unique'
        ),
    ),
);

ExtensionManagementUtility::addTCAcolumns('pages', $newPageColumns);

$GLOBALS['TCA']['pages']['palettes']['sitepackageone'] = array(
    'canNotCollapse' => 1,
    'showitem' => 'ww_css_id, ww_css_class'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;LLL:EXT:sitepackageone/Resources/Private/Language/locallang.xlf:palettename;wwonepagetemplate,',
    '',
    'after:layout'
);
