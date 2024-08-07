<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'sitepackageone',
    'Configuration/TypoScript',
    'SitepackageOne TypoScript Configuration'
);
